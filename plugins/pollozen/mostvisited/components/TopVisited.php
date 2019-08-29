<?php namespace PolloZen\MostVisited\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Carbon\Carbon;
use PolloZen\MostVisited\Models\Visits;
use RainLab\Blog\Models\Post;
use RainLab\Blog\Models\Category;

class TopVisited extends ComponentBase
{
     /**
     * @var Illuminate\Database\Eloquent\Collection | array
     */
    public $mostVisitedPosts;

    /**
     * Reference to the page name for linking to posts.
     * @var string
     */
    public $postPage;

    /**
     * Category filter
     */
    public $category;

    public function componentDetails()
    {
        return [
            'name'        => 'Top Visited Component',
            'description' => 'Retrieve the top visited RainLab Blog Posts'
        ];
    }
    /**
     * Definition of propertys
     * @return [array]
     */
    public function defineProperties()
    {
        return [
            'period' =>[
                'title'         => 'Most visited from:',
                'description'   => '',
                'default'       => 2,
                'type'          => 'dropdown',
                'options' => [
                    '1' => 'Today',
                    '2' => 'Current week',
                    '3' => 'Yesterday',
                    '4' => 'Last week',
                    '5' => 'All time'
                ],
                'showExternalParam' => false
            ],
            'category' =>[
                'title'         => 'Category Filter',
                'description'   => 'Filter result by category. All categories by default',
                'type'          => 'dropdown',
                'placeholder'   => 'Select a category',
                'showExternalParam' => false,
                'default'       => 0
            ],
            'postPerPage' => [
                'title'         => 'Top',
                'description'   => 'How many results must be fetched',
                'default' => 5,
                'type' => 'string'
            ],
            'postPage' => [
                'title'         => 'Post page',
                'description'   => 'Page to show linked posts',
                'type'          => 'dropdown',
                'default'       => 'blog/post',
                'group'         => 'Links',
            ],
            'slug' => [
                'title'         => 'rainlab.blog::lang.settings.post_slug',
                'description'   => 'rainlab.blog::lang.settings.post_slug_description',
                'default'       => '{{ :slug }}',
                'type'          => 'string',
                'group'         => 'Links'
            ]
        ];
    }
    /**
     * [getPostPageOptions]
     * @return [array][Blog]
     */
    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
    /**
     * [getCategoryOptions]
     * @return [array list] [Blog Categories]
     */
    public function getCategoryOptions(){
        $categories = [0=>'No filter'] + Category::orderBy('name')->lists('name','id');
        return $categories;
    }
    public function onRun(){
        $this->prepareVars();
        $this->mostVisitedPosts = $this->page['mostVisitedPosts'] = $this->getMostVisitedPosts();

    }

    /**
     * prepare Vars function
     * @return [object]
     */
    protected function prepareVars() {
        /*Get the category filter*/
        $this->category = ($this->property('category')!=0) ? $this->property('category') : null;

        /* Get post page */
        $this->postPage = $this->property('postPage') ? $this->property('postPage') : '404';

        /* Top */
        $this->postPerPage = is_int($this->property('postPerPage')) ? $this->property('postPerPage') : 5;
    }


    /**
     * getTop Function [Obtiene los Post ID  del rango y categorua seleccionados]
     * @return [type] [description]
     */
    protected function getTop(){
        switch($this->property('period')){
            case '1':
                $dateRange = Carbon::today();
            break;
            case '2':
                $fromDate = Carbon::now()->startOfWeek()->format('Y-m-d');
                $toDate = Carbon::now()->endOfWeek()->format('Y-m-d');
            break;
            case '3':
                $dateRange = Carbon::yesterday();
            break;
            case '4':
                $fromDate = Carbon::now()->subDays(7)->startOfWeek()->format('Y/m/d');
                $toDate = Carbon::now()->subDays(7)->endOfWeek()->format('Y/m/d');
            break;
            default:
                // Si no hay fecha se toman todos
            break;
        }

        $v = Visits::select('pollozen_mostvisited_visits.post_id');

        if(isset($dateRange)){
            $v->where('date',$dateRange);
        } elseif (isset($fromDate)) {
            $v->whereBetween('date', array($fromDate, $toDate));
        }

        $v  ->selectRaw('sum(visits) as visits, count(pollozen_mostvisited_visits.post_id) as touchs')
            ->groupBy('post_id')
            ->orderBy('visits','desc');

        if($this->category !== null){
            $v->join('rainlab_blog_posts_categories',function($join){
                $join ->on('pollozen_mostvisited_visits.post_id','=','rainlab_blog_posts_categories.post_id')
                ->where('rainlab_blog_posts_categories.category_id','=',$this->category);
            });
        }

        $v->limit($this->property('postPerPage'));
        $topIds = $v -> lists('post_id');

        return $topIds;
    }

    protected function getMostVisitedPosts(){
        /* Obtenemos los ID de los más visitados en el rango solicitado */
        $topIds = $this->getTop();
        if(count($topIds)!=0){
            $placeholders = implode(',', array_fill(0, count($topIds), '?')) ;

            /* Empezamos con el objeto de los posts en general que estén publicados*/
            $p = Post::isPublished();
            $p->whereIn('id', $topIds);
            $p->orderByRaw("FIELD(id,{$placeholders})",$topIds);
            $mostVisitedPosts = $p->get();

            /* Agregamos el helper de la URL*/
            $mostVisitedPosts->each(function($post) {
               $post->setUrl($this->postPage,$this->controller);
            });
            /* Mandamos los resultados */
            return $mostVisitedPosts;
        } else {
            return [];
        }
    }
}
