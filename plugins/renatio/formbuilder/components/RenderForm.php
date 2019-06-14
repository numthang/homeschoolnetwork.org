<?php

namespace Renatio\FormBuilder\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Exception;
use Renatio\FormBuilder\Models\Form;
use Renatio\FormBuilder\Queries\FormByCodeQuery;
use Renatio\FormBuilder\Traits\FileUploader;
use Renatio\FormBuilder\Traits\RenderFormAjax;

/**
 * Class RenderForm
 * @package Renatio\FormBuilder\Components
 */
class RenderForm extends ComponentBase
{

    use FileUploader;
    use RenderFormAjax;

    /**
     * @var Form
     */
    public $form;

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name' => 'renatio.formbuilder::lang.render_form.name',
            'description' => 'renatio.formbuilder::lang.render_form.description'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
            'formCode' => [
                'title' => 'renatio.formbuilder::lang.form.title',
                'description' => 'renatio.formbuilder::lang.form.description',
                'type' => 'dropdown',
                'placeholder' => e(trans('renatio.formbuilder::lang.form.placeholder')),
                'default' => 'default-form',
                'validation' => ['required' => true]
            ],
            'redirect' => [
                'title' => 'renatio.formbuilder::lang.redirect.title',
                'description' => 'renatio.formbuilder::lang.redirect.description',
                'type' => 'dropdown',
                'default' => ''
            ],
            'custom_redirect' => [
                'title' => 'renatio.formbuilder::lang.custom_redirect.title',
                'description' => 'renatio.formbuilder::lang.custom_redirect.description',
                'default' => ''
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        try {
            $this->form = FormByCodeQuery::find($this->property('formCode'));

            $this->onPageInit();
        } catch (Exception $e) {
            $this->page['formCode'] = $this->property('formCode');
        }
    }

    /**
     * @inheritdoc
     */
    public function onRun()
    {
        $this->page['form'] = $this->form;

        $this->addAssets();

        if ($result = $this->checkUploadAction()) {
            return $result;
        }
    }

    /**
     * @return mixed
     */
    public function getFormCodeOptions()
    {
        return Form::all()->lists('name', 'code');
    }

    /**
     * @return array
     */
    public function getRedirectOptions()
    {
        return $this->getPagesOptions();
    }

    /**
     * @return void
     */
    private function addAssets()
    {
        $this->addJs('assets/js/form.js');

        if ($this->form && $this->form->hasFilesUpload()) {
            $this->addCss('assets/css/uploader.css');
            $this->addJs('assets/vendor/dropzone/dropzone.js');
            $this->addJs('assets/js/file-multi.js');
        }
    }

    /**
     * @return void
     */
    private function onPageInit()
    {
        if ($field = $this->form->hasFilesUpload()) {
            $this->page['fileConfig'] = $this->fileConfig = $field->getFileConfig();
        }
    }

    /**
     * @return mixed
     */
    private function getPagesOptions()
    {
        return $this->emptyRedirectOption() + $this->pagesList();
    }

    /**
     * @return array
     */
    private function emptyRedirectOption()
    {
        return ['' => trans('renatio.formbuilder::lang.redirect.none')];
    }

    /**
     * @return mixed
     */
    private function pagesList()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

}
