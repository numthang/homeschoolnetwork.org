<?php namespace Renatio\FormBuilder\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Request;

/**
 * Class Sections
 * @package Renatio\FormBuilder\Controllers
 */
class Sections extends Controller
{

    /**
     * @var array
     */
    public $implement = ['Backend.Behaviors.ReorderController'];

    /**
     * @var string
     */
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Renatio.FormBuilder', 'formbuilder', 'fields');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function reorderExtendQuery($query)
    {
        return $query->where('form_id', Request::segment(6));
    }

}
