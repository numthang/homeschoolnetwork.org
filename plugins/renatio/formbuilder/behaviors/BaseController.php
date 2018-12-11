<?php

namespace Renatio\FormBuilder\Behaviors;

use October\Rain\Extension\ExtensionBase;
use Flash;

/**
 * Class BaseController
 * @package Renatio\FormBuilder\Behaviors
 */
abstract class BaseController extends ExtensionBase
{

    /**
     * @var
     */
    protected $controller;

    /**
     * @param $controller
     */
    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    abstract protected function deleteChecked();

    /**
     * @return string
     */
    abstract protected function getEmptyCheckMessage();

    /**
     * @return mixed
     */
    public function index_onListRefresh()
    {
        return $this->controller->listRefresh();
    }

    /**
     * @return mixed
     */
    public function index_onDelete()
    {
        if ( ! $this->checked()) {
            Flash::error($this->getEmptyCheckMessage());

            return;
        }

        $this->deleteChecked();

        return $this->controller->listRefresh();
    }

    /**
     * @return bool
     */
    protected function checked()
    {
        $checkedIds = post('checked');

        return is_array($checkedIds) && count($checkedIds);
    }

}
