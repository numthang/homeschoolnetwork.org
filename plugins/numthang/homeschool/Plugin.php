<?php namespace Numthang\Homeschool;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
            'Numthang\Homeschool\Components\Courses' => 'courses',
            'Numthang\Homeschool\Components\CourseForm' => 'courseform'
        ];
    }

    public function registerSettings()
    {
    }
}
