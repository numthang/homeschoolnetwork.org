<?php namespace FireUnion\BlogFront\Components;

use Cms\Classes\ComponentBase;
use Redirect;
use System\Classes\PluginManager;
use RainLab\Blog\Models\Post as BlogPost;
use Input;
use DB;
//Numthang added
use GinoPane\BlogTaxonomy\Models\Series as Series;
use Auth;

class PostForm extends ComponentBase {
	use \FireUnion\BlogFront\Traits\Loaders;
	use \FireUnion\BlogFront\Traits\Mailer;
	public $listPage;
	public $postPage;
	public $tags;

	public function componentDetails() {
		return [
			'name' => 'fireunion.blogfront::lang.form_comp.name',
			'description' => 'fireunion.blogfront::lang.form_comp.description',
		];
	}

	public function defineProperties() {
		return $this->propertiesFor('form');
	}

	public function init() {

		$this->initFor('form');
		$this->post = $this->loadPost();
		if ($this->allow_images) {
			$manager = PluginManager::instance();
			if ($manager->exists('Responsiv.Uploader')) {

				$component = $this->addComponent(
					'Responsiv\Uploader\Components\ImageUploader',
					'imageUploader',
					[
						'placeholderText' => 'Add Image',
						'deferredBinding' => true,
						//'fileTypes' => 'jpg',
						'maxSize' => '3',
					]
				);
				$component->bindModel('featured_images', $this->post);
			} else {
				$this->allow_images = false;
				die('You must have <strong>Responsive.Uploader</strong> plugin installed and enabled to allow image uploading.  Disabling "Allow Image Uploading" should prvent this error from showing.');
			}
		}
	}

	public function onRun() {
		$this->runFor('form');
		/*Numthang get post current using tags*/
		if($this->param('slug')) {
			$query = BlogPost::where('slug', '=', $this->param('slug'))
					->with('tags');
			$post = $query->get();
			foreach ($post[0]->tags as $key => $value) {
				$this->tags[] = $value['id'];
			}
		}
		/*end Numthang*/
	}

	/**
	 * Ajax handler to save an event from form
	 * triggers onRun to show list after delete
	 * @return array for a flash like error message if there is a problem with form validation
	 */
	public function onSave() {
    /*Numthang added this because slug always empty because of the Thai alphabet*/
    BlogPost::extend(function($model) {
      $model->bindEvent('model.beforeValidate', function() use ($model) {
        if(empty($model->slug))
          $model->slug = DB::table('rainlab_blog_posts')->max('id') + 1;
        if(post('evaluation_id') !== null)//fillable doesn't work at frontend
          $model->evaluation_id = post('evaluation_id');
      });
    });
 		/*end Numthang*/
     if (!$result=$this->save()) {
			return null;
    }
    /*Numthang insert tag*/
    $user = Auth::getUser();
		post('id') ? $id = post('id') : $id = DB::table('rainlab_blog_posts')->max('id');
		$post = BlogPost::find($id);
    $post->tags()->detach(); //delete all tags relation to post
    if($tags = post('tags')) {
      foreach($tags as $tagID) {
        \GinoPane\BlogTaxonomy\Models\Tag::extend(function($model) {//extend beforevalidate method add unique slug
          $model->rules = [//override validation no checking thai alphabet
            'name' => "required|unique:" .$model->table. "|min:2|regex:/^[\w\-][ก-๛]+$/iu"
          ];
          $model->bindEvent('model.beforeValidate', function() use ($model) {
            $model->slug = DB::table('ginopane_blogtaxonomy_tags')->max('id') + 1;
          });
        });
        if(!is_numeric($tagID)) {//If get letter is new tag adding
          $newTag = new \GinoPane\BlogTaxonomy\Models\Tag;
          $newTag->name = $tagID;
          $newTag->user_id = $user->id;
          $newTag->save();
          $newTags[] = $newArray[] = $newTag->id;
        } else {
          $newArray[] = $tagID;
        }
      }
      $post->tags()->attach($newArray);//attach all tags list
      if(isset($newTags)) {//insert serie of mod eg: post, portfolio
        empty($this->param('mod')) ? $mod = 'portfolio' : $mod = $this->param('mod');
        $serie = Series::where('slug', $mod)->first();
        #$serie->tags()->detach();
        $serie->tags()->attach($newTags);//attach only new tags
      }
    }
    /*end Numthang*/

		// Redirect to the intended page after successful update
		if(empty($this->param('slug')) || !post('published')) //create new blog
			$redirectUrl = $this->pageUrl($this->property('listPage'));
		else { //in case of edit blog
			$redirectUrl = $this->pageUrl($this->property('postPage'));
		}

		//dd($redirectUrl);
		if(post('redirect'))
			return Redirect::to($redirectUrl);
	}
	public function onDelete() {
		$blogpost = new BlogPost();
		$blogpost->where('slug', '=', $this->param('slug'))->delete();
		$redirectUrl = $this->pageUrl($this->property('listPage'));
		return Redirect::to($redirectUrl);

	}
}
