<?php namespace Numthang\BlogScope\Components;

use Lang;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use RainLab\Blog\Models\Post as BlogPost;
use RainLab\Blog\Models\Category as BlogCategory;
use Bedard\BlogTags\Models\Tag;
use BackendAuth;

class ScopePosts extends ComponentBase
{
  /**
   * A collection of posts to display
   * @var Collection
   */
  public $posts;

  /**
   * Parameter to use for the page number
   * @var string
   */
  public $pageParam;

  /**
   * If the post list should be filtered by a category, the model to use.
   * @var Model
   */
  public $category;

  /**
   * Message to display when there are no messages.
   * @var string
   */
  public $noPostsMessage;

  /**
   * Reference to the page name for linking to posts.
   * @var string
   */
  public $postPage;

  /**
   * Reference to the page name for linking to categories.
   * @var string
   */
  public $categoryPage;

  /**
   * If the post list should be ordered by another attribute.
   * @var string
   */
  public $sortOrder;
  public $tags;
  public $postsbytag;
  public $from, $to;

  public function componentDetails() {
      return [
        'name'        => 'Scope posts',
        'description' => 'Scope blog posts'
      ];
  }

  public function defineProperties() {
    return [
      'pageNumber' => [
          'title'       => 'rainlab.blog::lang.settings.posts_pagination',
          'description' => 'rainlab.blog::lang.settings.posts_pagination_description',
          'type'        => 'string',
          'default'     => '{{ :page }}',
      ],
      'categoryFilter' => [
          'title'       => 'rainlab.blog::lang.settings.posts_filter',
          'description' => 'rainlab.blog::lang.settings.posts_filter_description',
          'type'        => 'string',
          'default'     => '',
      ],
      'postsPerPage' => [
          'title'             => 'rainlab.blog::lang.settings.posts_per_page',
          'type'              => 'string',
          'validationPattern' => '^[0-9]+$',
          'validationMessage' => 'rainlab.blog::lang.settings.posts_per_page_validation',
          'default'           => '100',
      ],
      'evaluationID' => [
          'title' => 'Posts by evaluation',
          'default' => 0
      ],
      'userID' => [
          'title' => 'Posts by user',
          'default' => 0
      ],
      'authorID' => [
          'title' => 'Posts by author',
          'default' => 0
      ],
      'from' => [
          'title' => 'Published from',
          'default' => '0000-00-00'
      ],
      'to' => [
          'title' => 'Published to',
          'default' => '0000-00-00'
      ],
      'isPublished' => [
          'title' => 'Published',
          'description' => 'If false show all posts and drafted',
          'default' => true
      ],
      'drafted' => [
          'title' => 'Show only drafted',
          'default' => 0
      ],
      'categoryPage' => [
          'title'       => 'rainlab.blog::lang.settings.posts_category',
          'description' => 'rainlab.blog::lang.settings.posts_category_description',
          'type'        => 'dropdown',
          'default'     => 'blog/category',
          'group'       => 'rainlab.blog::lang.settings.group_links',
      ],
      'postPage' => [
          'title'       => 'rainlab.blog::lang.settings.posts_post',
          'description' => 'rainlab.blog::lang.settings.posts_post_description',
          'type'        => 'dropdown',
          'default'     => 'blog/post',
          'group'       => 'rainlab.blog::lang.settings.group_links',
      ],
      'noPostsMessage' => [
          'title'             => 'rainlab.blog::lang.settings.posts_no_posts',
          'description'       => 'rainlab.blog::lang.settings.posts_no_posts_description',
          'type'              => 'string',
          'default'           => Lang::get('rainlab.blog::lang.settings.posts_no_posts_default'),
          'showExternalParam' => false,
      ],
      'sortOrder' => [
          'title'       => 'rainlab.blog::lang.settings.posts_order',
          'description' => 'rainlab.blog::lang.settings.posts_order_description',
          'type' => 'dropdown',
          'default' => 'published_at asc'
      ],
      'exceptPost' => [
          'title'             => 'rainlab.blog::lang.settings.posts_except_post',
          'description'       => 'rainlab.blog::lang.settings.posts_except_post_description',
          'type'              => 'string',
          'validationPattern' => 'string',
          'validationMessage' => 'rainlab.blog::lang.settings.posts_except_post_validation',
          'default'           => '',
          'group'             => 'rainlab.blog::lang.settings.group_exceptions',
      ],
      'exceptCategories' => [
          'title'       => 'rainlab.blog::lang.settings.posts_except_categories',
          'description' => 'rainlab.blog::lang.settings.posts_except_categories_description',
          'type'        => 'string',
          'default'     => '',
          'group'       => 'rainlab.blog::lang.settings.group_exceptions',
      ],
    ];
  }
  public function getCategoryPageOptions() {
    return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
  }
  public function getPostPageOptions() {
    return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
  }
  public function getSortOrderOptions(){
    $options = BlogPost::$allowedSortingOptions;
    foreach ($options as $key => $value) {
        $options[$key] = Lang::get($value);
    }
    return $options;
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
  protected function prepareVars() {
    $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
    $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');
    /*
     * Page links
     */
    $this->postPage = $this->page['postPage'] = $this->property('postPage');
    $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');

    if($this->property('from') == '0000-00-00' || $this->property('to') == '0000-00-00' || $this->property('from') == null) {
      $this->from = '1978-01-01';
      $this->to = '2100-01-01';
    }
    else {
      $this->from = $this->property('from');
      $this->to = $this->property('to');
    }
  }
  protected function sortPostsbyTags() {
    $category = $this->category ? $this->category->id : null;
    $tags = $this->tags;
    $i = 0; $list = array();

    foreach ($tags['id'] as $key1 => $tag_id) {
      $posts = Tag::Where('id', $tag_id)
        ->with(['posts' => function($query) {
          $category = $this->category ? $this->category->id : null;
          $query
            ->where('author_id', '=', $this->property('authorID'))
            ->orWhere(function ($query2) {
              $query2
                ->where('author_id', '=', $this->property('userID'))
                ->where('evaluation_id', '=', $this->property('evaluationID'));
            })
            ->whereBetween('published_at', [$this->from, $this->to])
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
    //dd($list);
    return $list;
  }
  protected function listPosts() {
      $category = $this->category ? $this->category->id : null;
      /*
       * List all the posts, eager load their categories
       */
      $isPublished = !$this->checkEditor(); //if backend user logged in and can access post then isPublished is false also show unpublished
      $posts = BlogPost::with('categories')
        ->with('tags')
        ->where('author_id', '=', $this->property('authorID'))
        ->orWhere('author_id', '=', $this->property('userID'))
        ->whereBetween('published_at', [$this->from, $this->to])
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
      //prepareVars tags list from this author
      $tags['id'] = $tags['name'] = Array();
      #$tags['name'] = Array();
      for($i=0;$i<count($posts);$i++) {
        foreach ($posts[$i]->tags as $key => $value) {
          if(!in_array($value['id'], $tags['id'])) {
            $tags['name'][] = $value['name'];
            $tags['id'][] = $value['id'];
          }
        }
      }
      #dd($tags);
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
  protected function loadCategory()
  {
      if (!$slug = $this->property('categoryFilter')) {
          return null;
      }

      $category = new BlogCategory;

      $category = $category->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
          ? $category->transWhere('slug', $slug)
          : $category->where('slug', $slug);

      $category = $category->first();
      return $category ?: null;
  }
  protected function checkEditor()
  {
      $backendUser = BackendAuth::getUser();
      return $backendUser && $backendUser->hasAccess('rainlab.blog.access_posts');
  }
}
