<?php namespace PolloZen\MostVisited;

use Backend;
use System\Classes\PluginBase;
use RainLab\Blog\Models\Post as PostModel;

/**
 * MostVisited Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.Blog'];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Most Visited Posts',
            'description' => 'Register visit to RainLab Blog publication and retrieve the most visited publications',
            'author'      => 'PolloZen',
            'icon'        => 'icon-list-ul'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot(){
        PostModel::extend(function($model){
            $model->hasMany['visits'] = ['PolloZen\MostVisited\Models\Visits'];
        });

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents(){

        return [
            'PolloZen\MostVisited\Components\RegisterVisit' => 'registerVisit',
            'PolloZen\MostVisited\Components\TopVisited' => 'topPosts',
        ];
    }
}
