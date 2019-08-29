<?php namespace Tallpro\Related;

use Backend;
use System\Classes\PluginBase;

/**
 * Related Plugin Information File
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
            'name'        => 'tallpro.related::lang.plugin.name',
            'description' => 'tallpro.related::lang.plugin.description',
            'author'      => 'TallPro',
            'icon'        => 'icon-paper'
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
     * @return array
     */
    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'Related articles',
                'icon'        => 'icon-comments-o',
                'description' => 'Manage Settings.',
                'class'       => 'Tallpro\Related\Models\Settings',
                'order'       => 60
            ]
        ];
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
            'Tallpro\Related\Components\Related' => 'related',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [];
    }
}
