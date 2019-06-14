<?php

namespace Renatio\FormBuilder\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Class FieldTypes
 * @package Renatio\FormBuilder\Controllers
 */
class FieldTypes extends Controller
{

    /**
     * @var array
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Renatio.FormBuilder.Behaviors.FieldTypeController'
    ];

    /**
     * @var array
     */
    public $requiredPermissions = ['renatio.formbuilder.access_fieldtypes'];

    /**
     * @var string
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Renatio.FormBuilder', 'formbuilder', 'fieldtypes');
    }

}
