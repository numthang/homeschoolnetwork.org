<?php namespace eBussola\UserFacebook;

use eBussola\Userfacebook\Models\Settings;
use Facebook\FacebookSession;
use System\Classes\PluginBase;

/**
 * UserFacebook Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * @var array Plugin dependencies
     */
    public $require = [
        'RainLab.User'
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'UserFacebook',
            'description' => \Lang::get('ebussola.userfacebook::lang.plugin.description'),
            'author' => 'eBussola',
            'icon' => 'icon-facebook'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     */
    public function registerComponents()
    {
        return [
            '\eBussola\Userfacebook\Components\FacebookSession' => 'facebookSession'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     */
    public function registerPermissions()
    {
        return [
            'ebussola.userfacebook.settings.facebook' => [
                'label' => 'ebussola.userfacebook::lang.permissions.settings.facebook',
                'tab' => 'system::lang.permissions.name'
            ]
        ];
    }

    public function register()
    {
        require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot()
    {
        FacebookSession::setDefaultApplication(Settings::get('app_id'), Settings::get('app_secret'));

        \RainLab\User\Models\User::extend(function (\RainLab\User\Models\User $model) {
            $model->hasOne['social_ids'] = ['\eBussola\Userfacebook\Models\SocialIds'];
        });
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'User Facebook Settings',
                'description' => 'Login via Facebook.',
                'category'    => 'User Facebook',
                'icon'        => 'icon-facebook',
                'class'       => '\eBussola\Userfacebook\Models\Settings',
                'order'       => 500,
                'keywords'    => 'facebook user',
                'permissions' => ['ebussola.userfacebook.settings.facebook']
            ]
        ];
    }

}
