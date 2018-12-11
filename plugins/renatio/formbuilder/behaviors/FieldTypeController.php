<?php

namespace Renatio\FormBuilder\Behaviors;

use Flash;
use Renatio\FormBuilder\Models\FieldType;
use Request;
use File;

/**
 * Class FieldTypeController
 * @package Renatio\FormBuilder\Behaviors
 */
class FieldTypeController extends BaseController
{

    public function onRestore($id)
    {
        $model = $this->controller->formFindModelObject($id);

        if ($markup = $this->getDefaultMarkup($model)) {
            $model->markup = $markup;
            $model->save();

            Flash::success(trans('renatio.formbuilder::lang.field_type.restore_success'));
        }

        return redirect(Request::url());
    }

    /**
     * @return void
     */
    protected function deleteChecked()
    {
        foreach (post('checked') as $typeId) {
            if ( ! $type = FieldType::find($typeId)) {
                continue;
            }

            $type->delete();
        }

        Flash::success(trans('renatio.formbuilder::lang.field_types.delete_success'));
    }

    /**
     * @return string
     */
    protected function getEmptyCheckMessage()
    {
        return trans('renatio.formbuilder::lang.field_types.delete_empty');
    }

    /**
     * @param $model
     * @return bool|string
     */
    private function getDefaultMarkup($model)
    {
        $path = __DIR__ . "/../updates/fields/_{$model->code}.htm";

        if (File::exists($path)) {
            return File::get($path);
        }

        return false;
    }

}
