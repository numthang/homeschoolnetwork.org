<?php namespace Numthang\Profile;

use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot() {
      UsersController::extendFormFields(function($form, $model, $context) {
        $form->addTabFields([
          'website' => [
            'label' => 'Website',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ], 
          'facebook' => [
            'label' => 'Facebook',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ], 
          'Line' => [
            'label' => 'Line',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ], 
          'Status' => [
            'label' => 'Status',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ]
        ]);
      });
    }
}
