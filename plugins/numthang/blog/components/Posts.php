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
    public function defineProperties()
    {
        $parentProps = parent::defineProperties();
        $properties = array_merge(
            $parentProps,
            [
                'userID' => [
                    'title' => 'User ID',
                    'description' => 'List all posts by backend user_id',
                    'default' => 0,
                    'group'       => 'Scope'
                ],
                'authorID' => [
                    'title' => 'Author ID',
                    'description' => 'List all posts by frontend author_id',
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
                    'title' => 'Show only drafted',
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
                    'description' => 'List all posts by evaluation_id',
                    'default' => 0,
                    'group'       => 'Scope'
                ],
                'ownerID' => [
                    'title' => 'Evaluation\'s owner ID',
                    'description' => 'List all posts by frontend user_id and evaluation_id',
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

    protected function prepareVars()
    {
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
    protected function sortPostsbyTags() {//this method do posts grouping by tag_id
        $category = $this->category ? $this->category->id : null;
        $tags = $this->tags;
        $i = 0; $list = array();
        #dump($this->property('authorID'));
        #dump($this->property('userID'));
        #dump($this->property('ownerID'));
        #dump($this->property('evaluationID'));

        foreach ($tags['id'] as $key1 => $tag_id) {
          $posts = Tag::Where('id', $tag_id)
            ->with(['posts' => function($query) {
                $category = $this->category ? $this->category->id : null;
                
                if($this->property('authorID') || $this->property('userID')) {
                    $query
                    ->Where(function ($query) {
                        if($this->property('authorID'))
                            $query->where('author_id', '=', $this->property('authorID'));
                        if($this->property('userID'))
                            $query->orwhere('user_id', '=', $this->property('userID'));
                        $query->whereBetween('created_at', [$this->from, $this->to]);
                    });
                }
                $query->Where(function ($query) {
                    if($this->property('evaluationID'))
                      $query
                        ->where('author_id', '=', $this->property('ownerID'))
                        ->where('evaluation_id', '=', $this->property('evaluationID'))
                        ->whereBetween('created_at', [$this->from, $this->to]);
                })
                ->listFrontEnd([
                  'category'  => $category,
                  'sort'      => $this->property('sortOrder'),
                  'published' => $this->property('isPublished')
                ]);
            }])
            ->get();
    
          foreach ($posts[0]->posts as $key => $value) {
            // code...
            $list[$i]['tag_id'] = $tag_id;
            $list[$i]['tag'] = $tags['name'][$key1];
            $list[$i]['post_id'] = $value->id;
            $list[$i]['slug'] = $value->slug;
            $list[$i]['title'] = $value->title;
            $list[$i]['excerpt'] = $value->excerpt;
            $list[$i]['content_html'] = $value->content_html;
            #$list[$i]['featured_images'] = $value->featured_images[0]->path;
            for($j=0;$j<count($value->featured_images);$j++) {
              $list[$i]['featured_images'][] = $value->featured_images[$j]->path;
            }
            $i++;
          }
        }
        sort($list);
        #dump($list);
        /*OUTPUT Like
            array:3 [▼
                0 => array:7 [▼
                    "tag_id" => 1
                    "tag" => "test"
                    "post_id" => 10
                ]
            ]*/
        return $list;
    }
    protected function listPosts() {
        $category = $this->category ? $this->category->id : null;
        /*
         * List all the posts, eager load their categories
         */
        $isPublished = !$this->checkEditor();
        $posts = BlogPost::with('categories')
        ->with('tags')
        ->Where(function ($query) {//กรณีเอาผู้แต่งจากภายนอกเลยไม่ต้องสังกัด evalution ก็ได้ หาแต่ผู้แต่ง
            $category = $this->category ? $this->category->id : null;
            $query
            ->where(
                function ($query) {
                    if($this->property('featured'))
                        $query->where('featured', '=', $this->property('featured'));
                }
            )
            ->where(
                function ($query) {
                    if($this->property('authorID'))
                        $query->where('author_id', '=', $this->property('authorID'));
                    if($this->property('userID'))
                        $query->orwhere('user_id', '=', $this->property('userID'));
                }
            )
            ->whereBetween('created_at', [$this->from, $this->to])
            ->listFrontEnd([
                'category'  => $category,
                'published' => $this->property('isPublished')
            ]);
        })
        ->orWhere(function ($query) {//looking for ownerID with evaluation_id
            $category = $this->category ? $this->category->id : null;
            if($this->property('evaluation_id'))
                $query
                ->where('author_id', '=', $this->property('ownerID'))
                ->where('evaluation_id', '=', $this->property('evaluationID'))
                ->whereBetween('created_at', [$this->from, $this->to])
                ->listFrontEnd([
                'category'  => $category,
                'published' => $this->property('isPublished')
                ]);
        })
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
        //prepareVars tags list from this author
        $tags['id'] = $tags['name'] = Array();
        for($i=0;$i<count($posts);$i++) {
        foreach ($posts[$i]->tags as $key => $value) {
            if(!in_array($value['id'], $tags['id'])) {
            $tags['name'][] = $value['name'];
            $tags['id'][] = $value['id'];
            }
        }
        }
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
          ->where('author_id', '=', $this->property('authorID'))
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
