<?php

namespace Renatio\FormBuilder\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Class FieldType
 * @package Renatio\FormBuilder\Models
 */
class FieldType extends Model
{

    use Validation;

    /**
     * @var array
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];


    /**
     * @var string
     */
    public $table = 'renatio_formbuilder_field_types';

    /**
     * @var array
     */
    public $rules = [
        'name' => 'required|max:100',
        'code' => 'required|unique:renatio_formbuilder_field_types|max:100'
    ];

    /**
     * @var array
     */
    public $attributeNames = [
        'name' => 'renatio.formbuilder::lang.field.name',
        'code' => 'renatio.formbuilder::lang.field.code'
    ];

    /**
     * @var array
     */
    protected $fillable = ['name', 'code', 'description', 'markup'];

    /**
     * @var array
     */
    public $translatable = ['name', 'description'];

    /**
     * @param $code
     * @return bool
     */
    public static function isOriginType($code)
    {
        return in_array($code, [
            'text',
            'textarea',
            'dropdown',
            'checkbox',
            'checkbox_list',
            'radio_list',
            'recaptcha',
            'submit',
            'country_select',
            'state_select',
            'section'
        ]);
    }

}
