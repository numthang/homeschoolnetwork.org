<?php namespace  CheerfulLab\BlogEditable;

use System\Classes\PluginBase;

/**
 * Editable Plugin Information File
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
            'name'        => 'Blog Editable',
            'description' => 'In-context content editor for blog',
            'author'      => 'Pawel Samusev',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'CheerfulLab\BlogEditable\Components\Editable' => 'editable_blog',
        ];
    }

}
