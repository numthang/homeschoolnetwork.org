<?php

namespace Renatio\FormBuilder\Models;

use Backend\Models\ExportModel;

/**
 * Class FormLogExport
 * @package Renatio\FormBuilder\Models
 */
class FormLogExport extends ExportModel
{

    /**
     * @param $columns
     * @param null $sessionKey
     * @return mixed
     */
    public function exportData($columns, $sessionKey = null)
    {
        $logs = FormLog::with('form')->get();

        $export = [];

        foreach ($logs as $key => $log) {
            $export[$key]['id'] = $log->id;
            $export[$key]['form_id'] = $log->form_id;
            $export[$key]['form_name'] = $log->form->name;
            $export[$key]['form_data'] = json_encode($log->form_data);
            $export[$key]['content_html'] = $log->content_html;
            $export[$key]['created_at'] = $log->created_at;
            $export[$key]['updated_at'] = $log->updated_at;
        }

        return $export;
    }

}