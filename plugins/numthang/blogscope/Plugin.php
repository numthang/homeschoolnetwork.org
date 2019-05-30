<?php namespace Numthang\BlogScope;

use Backend;
use System\Classes\PluginBase;

/**
 * BlogScope Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.Blog'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'BlogScope',
            'description' => 'Filtering by author or something else',
            'author'      => 'Numthang',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Numthang\BlogScope\Components\ScopePosts' => 'scopePosts',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'numthang.BlogScope.some_permission' => [
                'tab' => 'BlogScope',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'BlogScope' => [
                'label'       => 'BlogScope',
                'url'         => Backend::url('numthang/BlogScope/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['numthang.BlogScope.*'],
                'order'       => 500,
            ],
        ];
    }
}
