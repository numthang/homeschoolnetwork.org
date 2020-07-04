<?php namespace Numthang\Blog\Components;

use Cms\Classes\ComponentBase,
    Cms\Classes\Page;
use RainLab\Blog\Components\Posts as RainLabPosts,
    RainLab\Blog\Models\Post as BlogPost;
use GinoPane\BlogTaxonomy\Models\Tag;

class Posts extends RainLabPosts
{
    public $sortOrder;
    public $tags;
    public $postsbytag;
    public $from, $to;
    public $user_field;

    public function defineProperties() {
      $parentProps = parent::defineProperties();
      $properties = array_merge(
        $parentProps,
        [
          'backend' => [
            'title'       => 'Backend User',
            'description' => 'List from backend or frontend posts',
            'type'        => 'checkbox',
            'default'     => '1',
            'group'       => 'Scope'
          ],
          'userID' => [
              'title' => 'User ID',
              'description' => 'List all posts by backend user_id',
              'default' => 0,
              'group'       => 'Scope'
          ],
          'featured' => [
              'title'       => 'Featured',
              'description' => 'Check if you want to show only featured posts',
              'type'        => 'checkbox',
              'default'     => 0,
              'group'       => 'Scope'
          ],
          'drafted' => [
              'title' => 'Only drafted',
              'type'        => 'checkbox',
              'default' => 0,
              'group'       => 'Scope'
          ],
          'from' => [
              'title' => 'Published from',
              'default' => '0000-00-00',
              'group'       => 'Scope'
          ],
          'to' => [
              'title' => 'Published to',
              'default' => '0000-00-00',
              'group'       => 'Scope'
          ],
          'evaluationID' => [
              'title' => 'Evaluation ID',
              'description' => 'List all posts by evaluation_id เลือกโพสต์จากแบบประเมิน',
              'default' => 0,
              'group'       => 'Scope'
          ],
          'ownerID' => [
              'title' => 'Evaluation\'s owner ID',
              'description' => 'List all posts by evaluation_id\'s owner',
              'default' => 0,
              'group'       => 'Scope'
          ],
        ]
      );

      return is_array($properties) ? $properties : $parentProps;
    }
    public function onRun() {
        $this->prepareVars();
        $this->category = $this->page['category'] = $this->loadCategory();

        if($this->property('drafted'))
            $this->posts = $this->page['posts'] = $this->listDraftPosts();
        else {
            $this->posts = $this->page['posts'] = $this->listPosts();
            if($this->property('evaluationID'))//in case of using evaluation field
              $this->postsbytag = $this->sortPostsbyTags();
        }
        /*
         * If the page number is not valid, redirect
         */
        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->posts->lastPage()) && $currentPage > 1) {
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
            }
        }
    }

    protected function prepareVars() {
      $this->property('backend') ? $this->user_field = 'user_id' : $this->user_field = 'author_id';
      $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
      $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');
      /*
        * Page links
        */
      $this->postPage = $this->page['postPage'] = $this->property('postPage');
      $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
      if($this->property('from') == '0000-00-00' || $this->property('to') == '0000-00-00' || $this->property('from') == null) {//default 
        $this->from = '1900-01-01';
        $this->to = '2100-01-01';
      }
      else {
        $this->from = $this->property('from').' 00:00:00';
        $this->to = $this->property('to').' 00:00:00';
      }
    }
    protected function sortPostsbyTags() {
      #$category = $this->category ? $this->category->id : null;
      $tags = $this->tags;
      $i = 0; $list = array(); $already = array();
      #dump($this->property('userID')); #dump($this->property('userID')); #dump($this->property('ownerID')); #dump($this->property('evaluationID'));
      foreach ($tags['id'] as $key1 => $tag_id) {
        $posts = Tag::Where('id', $tag_id)
        ->with(['posts' => function($query) {
          $category = $this->category ? $this->category->id : null;
          $query
          ->Where(function ($query) {
            $query
            ->where($this->user_field, '=', $this->property('userID'))
            ->where('evaluation_id', '=', $this->property('evaluationID'))
            ;
          })
          ->orWhere(function ($query) {
            $query
            ->where($this->user_field, '=', $this->property('ownerID'))
            ->where('evaluation_id', '=', $this->property('evaluationID'))
            ;
          })
          ->whereBetween('created_at', [$this->from, $this->to])
          ->listFrontEnd([
            'category'  => $category,
            'sort'      => $this->property('sortOrder'),
            'published' => $this->property('isPublished')
          ]);
        }])->get();
  
        foreach ($posts[0]->posts as $key => $value) {
          // code...
          $list[$i]['tag_id'] = $tag_id;
          $list[$i]['tag'] = $tags['name'][$key1];
          $list[$i]['post_id'] = $value->id;
          $list[$i]['slug'] = $value->slug;
          $list[$i]['title'] = $value->title;
          $list[$i]['excerpt'] = $value->excerpt;
          $list[$i]['content_html'] = $value->content_html;
          if(in_array($value->id, $already))
            $list[$i]['skip'] = 1;
          else {
            $already[] = $value->id;
            $list[$i]['skip'] = 0;
          }
          #$list[$i]['featured_images'] = $value->featured_images[0]->path;
          for($j=0;$j<count($value->featured_images);$j++) {
            $list[$i]['featured_images'][] = $value->featured_images[$j]->path;
          }
          $i++;
        }
      }
      sort($list);
      #dump($list);
      return $list;
    }
    protected function listPosts() {
      dump($this->to);
      $category = $this->category ? $this->category->id : null;
      /*
        * List all the posts, eager load their categories
        */
      $isPublished = !$this->checkEditor(); //if backend user logged in and can access post then isPublished is false also show unpublished
      #dump($this->property('userID')); dump($this->property('ownerID')); dump($this->property('evaluationID'));
      $query = BlogPost::with('categories')->with('tags');
      if($this->property('evaluationID') && ($this->property('userID') || $this->property('ownerID'))) {
        $query->Where(function ($query) {
          $query
            ->where($this->user_field, '=', $this->property('userID'))
            ->where('evaluation_id', '=', $this->property('evaluationID'));
        })
        ->orWhere(function ($query) {
          $query
            ->where($this->user_field, '=', $this->property('ownerID'))
            ->where('evaluation_id', '=', $this->property('evaluationID'));
        });
      }
      else if($this->property('userID'))
        $query->where($this->user_field, '=', $this->property('userID'));
      if($this->property('featured'))
        $query->where('featured', '=', $this->property('featured'));
      $posts = $query
        ->whereBetween('created_at', [$this->from, $this->to])
        ->listFrontEnd([
          'page'             => $this->property('pageNumber'),
          'sort'             => $this->property('sortOrder'),
          'perPage'          => $this->property('postsPerPage'),
          'search'           => trim(input('search')),
          'category'         => $category,
          'published'        => $this->property('isPublished'),
          'exceptPost'       => $this->property('exceptPost'),
          'exceptCategories' => is_array($this->property('exceptCategories'))
            ? $this->property('exceptCategories')
            : explode(',', $this->property('exceptCategories')),
        ]);
  
      //dd($posts[0]);
      //prepareVars tags list from this author
      $tags['id'] = $tags['name'] = Array();
      for($i=0;$i<count($posts);$i++) {
        foreach ($posts[$i]->tags as $key => $value) {
          if(!in_array($value['id'], $tags['id'])) {
            $tags['name'][] = $value['name'];
            $tags['id'][] = $value['id'];
            #echo $posts[$i]->id.'<br>';
          }
        }
      }
      //dd($tags);
      //dd($posts[0]->featured_images);
      $this->tags = $tags;
      /*
        * Add a "url" helper attribute for linking to each post and category
        */
      $posts->each(function($post) {
        $post->setUrl($this->postPage, $this->controller);
        $post->categories->each(function($category) {
            $category->setUrl($this->categoryPage, $this->controller);
        });
      });
  
      return $posts;
    }
    protected function listDraftPosts() {
      $category = $this->category ? $this->category->id : null;
  
      $posts = BlogPost::with('categories')
        ->with('tags')
        ->where($this->user_field, '=', $this->property('userID'))
        ->where('published', '=', 0)
        ->listFrontEnd([
          'page'             => $this->property('pageNumber'),
          'sort'             => $this->property('sortOrder'),
          'perPage'          => $this->property('postsPerPage'),
          'search'           => trim(input('search')),
          'category'         => $category,
          'published'        => $this->property('isPublished'),
          'exceptPost'       => $this->property('exceptPost'),
          'exceptCategories' => is_array($this->property('exceptCategories'))
            ? $this->property('exceptCategories')
            : explode(',', $this->property('exceptCategories')),
      ]);
      //dd($posts);
      $posts->each(function($post) {
        $post->setUrl($this->postPage, $this->controller);
        $post->categories->each(function($category) {
            $category->setUrl($this->categoryPage, $this->controller);
        });
      });
  
      return $posts;
    }
}
