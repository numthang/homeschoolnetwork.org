<?php

namespace Renatio\FormBuilder\Behaviors;

use Flash;
use Renatio\FormBuilder\Models\FormLog;

/**
 * Class FormLogController
 * @package Renatio\FormBuilder\Behaviors
 */
class FormLogController extends BaseController
{

    /**
     * @return void
     */
    protected function deleteChecked()
    {
        foreach (post('checked') as $logId) {
            if ( ! $log = FormLog::find($logId)) {
                continue;
            }

            $log->delete();
        }

        Flash::success(trans('renatio.formbuilder::lang.logs.delete_success'));
    }

    /**
     * @return string
     */
    protected function getEmptyCheckMessage()
    {
        return trans('renatio.formbuilder::lang.logs.delete_empty');
    }

}
