<?php

namespace Renatio\FormBuilder\Queries;

use Renatio\FormBuilder\Models\Form;

/**
 * Class FormByCodeQuery
 * @package Renatio\FormBuilder\Models\Queries
 */
class FormByCodeQuery
{

    /**
     * @param $code
     * @return mixed
     */
    public static function find($code)
    {
        return Form::with([
            'fields' => function ($query) {
                $query->isVisible()->with(['section', 'field_type']);
            },
            // todo probably here inside section invisible field will be visible
            'sections' => function ($query) {
                $query->isVisible()->with('fields.field_type');
            }
        ])->whereCode($code)
            ->firstOrFail();
    }

}