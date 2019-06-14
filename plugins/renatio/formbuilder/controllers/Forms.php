<?php

namespace Renatio\FormBuilder\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\Backend;
use BackendMenu;
use October\Rain\Exception\ApplicationException;
use October\Rain\Support\Facades\Flash;
use Renatio\FormBuilder\Classes\DuplicateForm;
use Renatio\FormBuilder\Models\Field;

/**
 * Class Forms
 * @package Renatio\FormBuilder\Controllers
 */
class Forms extends Controller
{

    /**
     * @var array Behaviors
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
        'Renatio.FormBuilder.Behaviors.FormController'
    ];

    /**
     * @var array
     */
    public $requiredPermissions = ['renatio.formbuilder.access_forms'];

    /**
     * @var string
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var string
     */
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Renatio.FormBuilder', 'formbuilder', 'forms');
    }

    /**
     * @param $id
     */
    public function onDuplicate($id)
    {
        try {
            $form = $this->formFindModelObject($id);
            $copy = (new DuplicateForm($form))->handle();

            Flash::success(e(trans('renatio.formbuilder::lang.form.duplicate_success')));

            return Backend::redirect("renatio/formbuilder/forms/update/{$copy->id}");
        } catch (ApplicationException $e) {
            $this->handleError($e);
        }
    }

    /**
     * @param $formId
     */
    public function reorder($formId)
    {
        $this->pageTitle = trans('renatio.formbuilder::lang.fields.reorder');

        $toolbarConfig = $this->makeConfig();
        $toolbarConfig->buttons = '$/renatio/formbuilder/controllers/forms/_reorder_toolbar.htm';

        $this->vars['toolbar'] = $this->makeWidget('Backend\Widgets\Toolbar', $toolbarConfig);
        $this->vars['records'] = Field::where('form_id', $formId)->get();
        $this->vars['formId'] = $formId;
    }

}