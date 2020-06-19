<?php

namespace Numthang\Blog;

use File;
use Rainlab\Blog\Controllers\Posts as PostsController;
use Rainlab\Blog\Models\Post as PostModel;
use System\Classes\PluginBase;

/**
 * Blog Plugin Information File
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
            'name'        => 'Blog Extension',
            'description' => 'A Numthang blog extension for the RainLab.Blog plugin.',
            'author'      => 'Numthang',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register plugin components
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Numthang\Blog\Components\Post' => 'blogPost',
            'Numthang\Blog\Components\Posts' => 'scopePosts'
        ];
    }


    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'ddump' => function($var) { var_dump($var); }
            ]
        ];
    }
    public function boot() {
        PostModel::extend(function($model) {//กำหนด fillable field เพิ่ม
          $model->attachMany = [
            'featured_files' => 'System\Models\File',
            'featured_images' => 'System\Models\File',
          ];
          $model->addFillable([
            'featured',
          ]);
        });
        PostsController::extendFormFields(function($form, $model, $context) {//เพิ่ม user form ใน backend
          if (!$model instanceof PostModel) {
            return;
          }
          $form->addSecondaryTabFields([
            'featured' => [
              'label' => 'Featured Post',
              'type' => 'checkbox',
              'tab' => 'rainlab.blog::lang.post.tab_manage'
            ],
            'featured_files' => [
              'label' => '',
              'tab' => 'Files',
              'type' => 'fileupload',
              'mode' => 'file',
            ],
            'featured_files' => [
              'label' => '',
              'tab' => 'Files',
              'type' => 'fileupload',
              'mode' => 'file',
            ],
          ]);
        });
      }
}
