<?php

namespace Renatio\FormBuilder;

use Backend\Facades\Backend;
use Renatio\FormBuilder\Components\RenderForm;
use Renatio\FormBuilder\Models\Settings;
use Renatio\FormBuilder\Providers\ReCaptchaServiceProvider;
use System\Classes\PluginBase;
use System\Classes\PluginManager;

/**
 * Class Plugin
 * @package Renatio\FormBuilder
 */
class Plugin extends PluginBase
{

    /**
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'renatio.formbuilder::lang.plugin.name',
            'description' => 'renatio.formbuilder::lang.plugin.description',
            'author' => 'Renatio',
            'icon' => 'icon-code',
        ];
    }

    /**
     * @inheritdoc
     */
    public function boot()
    {
        app()->register(ReCaptchaServiceProvider::class);
    }

    /**
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'formbuilder' => [
                'label' => 'renatio.formbuilder::lang.navigation.formbuilder',
                'url' => Backend::url('renatio/formbuilder/forms'),
                'icon' => 'icon-check-square-o',
                'permissions' => ['renatio.formbuilder.*'],
                'order' => 500,
                'sideMenu' => [
                    'forms' => [
                        'label' => 'renatio.formbuilder::lang.navigation.forms',
                        'icon' => 'icon-check-square-o',
                        'url' => Backend::url('renatio/formbuilder/forms'),
                        'permissions' => ['renatio.formbuilder.access_forms'],
                    ],
                    'formlogs' => [
                        'label' => 'renatio.formbuilder::lang.navigation.formlogs',
                        'icon' => 'icon-archive',
                        'url' => Backend::url('renatio/formbuilder/formlogs'),
                        'permissions' => ['renatio.formbuilder.access_formlogs'],
                    ],
                    'fieldtypes' => [
                        'label' => 'renatio.formbuilder::lang.navigation.fieldtypes',
                        'icon' => 'icon-code',
                        'url' => Backend::url('renatio/formbuilder/fieldtypes'),
                        'permissions' => ['renatio.formbuilder.access_fieldtypes'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'renatio.formbuilder.access_settings' => [
                'label' => 'renatio.formbuilder::lang.permissions.access_settings',
                'tab' => 'renatio.formbuilder::lang.permissions.tab',
            ],
            'renatio.formbuilder.access_forms' => [
                'label' => 'renatio.formbuilder::lang.permissions.access_forms',
                'tab' => 'renatio.formbuilder::lang.permissions.tab',
            ],
            'renatio.formbuilder.access_formlogs' => [
                'label' => 'renatio.formbuilder::lang.permissions.access_formlogs',
                'tab' => 'renatio.formbuilder::lang.permissions.tab',
            ],
            'renatio.formbuilder.access_fieldtypes' => [
                'label' => 'renatio.formbuilder::lang.permissions.access_fieldtypes',
                'tab' => 'renatio.formbuilder::lang.permissions.tab',
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'renatio.formbuilder::lang.settings.label',
                'description' => 'renatio.formbuilder::lang.settings.description',
                'category' => 'renatio.formbuilder::lang.settings.category',
                'icon' => 'icon-google',
                'class' => Settings::class,
                'order' => 500,
                'keywords' => 'form builder contact',
                'permissions' => ['renatio.formbuilder.access_settings'],
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            RenderForm::class => 'renderForm',
        ];
    }

    /**
     * @return array
     */
    public function registerPageSnippets()
    {
        return [
            RenderForm::class => 'renderForm',
        ];
    }

    /**
     * @return array
     */
    public function registerMailTemplates()
    {
        return [
            'renatio.formbuilder::mail.contact' => 'Contact Form Template',
            'renatio.formbuilder::mail.default' => 'Default Form Template',
        ];
    }

    /**
     * @return array
     */
    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'locationPluginEnabled' => function () {
                    return PluginManager::instance()->exists('RainLab.Location');
                },
            ],
        ];
    }

}
