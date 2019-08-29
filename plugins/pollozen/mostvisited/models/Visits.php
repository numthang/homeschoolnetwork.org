<?php namespace PolloZen\MostVisited\Models;

use Model;
// use RainLab\Blog\Models\Category as BlogCategory;
use RainLab\Blog\Models\Post;
use Config;


/**
 * Visits Model
 */
class Visits extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pollozen_mostvisited_visits';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['post_id','date'];

    /**
     * @var array Relations
     */

    public $belongsTo = [
        'post' => ['Rainlab\Blog\Models\Post']
    ];
}