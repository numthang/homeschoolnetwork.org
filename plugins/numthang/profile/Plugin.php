<?php namespace Numthang\Profile;

use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;
use Rainlab\User\Models\User as UserModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot() {
      UserModel::extend(function($model) {//กำหนด fillable field เพิ่ม
        $model->addFillable([
          'website',
          'facebook',
          'line',
          'status',
          'country_id',
          'state_id',
          'amphure_id',
          'district_id',
          'note',
          'facebook_id',
          'twitter'
        ]);
      });
      UsersController::extendFormFields(function($form, $model, $context) {//เพิ่ม user form ใน backend
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
          'line' => [
            'label' => 'Line',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ],
          'status' => [
            'label' => 'Status',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ]
        ]);
      });
    }
}
