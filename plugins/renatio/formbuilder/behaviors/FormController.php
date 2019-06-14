<?php

namespace Renatio\FormBuilder\Behaviors;

use Flash;
use Renatio\FormBuilder\Models\Form;
use Renatio\FormBuilder\Models\Field;

/**
 * Class FormController
 * @package Renatio\FormBuilder\Behaviors
 */
class FormController extends BaseController
{

    /**
     * @return void
     */
    public function reorder_onMove()
    {
        // todo october reordering
        $sourceNode = Field::find(post('sourceNode'));
        $targetNode = post('targetNode') ? Field::find(post('targetNode')) : null;

        if ($sourceNode == $targetNode) {
            return;
        }

        switch (post('position')) {
            case 'before':
                $sourceNode->moveBefore($targetNode);
                break;
            case 'after':
                $sourceNode->moveAfter($targetNode);
                break;
            case 'child':
                $sourceNode->makeChildOf($targetNode);
                break;
            default:
                $sourceNode->makeRoot();
                break;
        }

        Flash::success(trans('renatio.formbuilder::lang.fields.reorder_success'));
    }

    /**
     * @return void
     */
    protected function deleteChecked()
    {
        foreach (post('checked') as $formId) {
            if ( ! $form = Form::find($formId)) {
                continue;
            }

            $form->delete();
        }

        Flash::success(trans('renatio.formbuilder::lang.forms.delete_success'));
    }

    /**
     * @return string
     */
    protected function getEmptyCheckMessage()
    {
        return trans('renatio.formbuilder::lang.forms.delete_empty');
    }

}
