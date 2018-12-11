<?php

namespace Renatio\FormBuilder\Updates;

use Illuminate\Support\Facades\File;
use October\Rain\Database\Updates\Seeder;
use Renatio\FormBuilder\Models\FieldType;

/**
 * Class SeedFieldTypesTable
 * @package Renatio\FormBuilder\Updates
 */
class SeedFieldTypesTable extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {
        $path = __DIR__ . '/fields/';

        FieldType::create([
            'name' => 'Text',
            'code' => 'text',
            'description' => 'Renders a single line text box.',
            'markup' => File::get($path . '_text.htm'),
        ]);

        FieldType::create([
            'name' => 'Textarea',
            'code' => 'textarea',
            'description' => 'Renders a multiline text box.',
            'markup' => File::get($path . '_textarea.htm'),
        ]);

        FieldType::create([
            'name' => 'Dropdown',
            'code' => 'dropdown',
            'description' => 'Renders a dropdown with specified options.',
            'markup' => File::get($path . '_dropdown.htm'),
        ]);

        FieldType::create([
            'name' => 'Checkbox',
            'code' => 'checkbox',
            'description' => 'Renders a single checkbox.',
            'markup' => File::get($path . '_checkbox.htm'),
        ]);

        FieldType::create([
            'name' => 'Checkbox List',
            'code' => 'checkbox_list',
            'description' => 'Renders a list of checkboxes.',
            'markup' => File::get($path . '_checkbox_list.htm'),
        ]);

        FieldType::create([
            'name' => 'Radio List',
            'code' => 'radio_list',
            'description' => 'Renders a list of radio options, where only one item can be selected at a time.',
            'markup' => File::get($path . '_radio_list.htm'),
        ]);

        FieldType::create([
            'name' => 'ReCaptcha',
            'code' => 'recaptcha',
            'description' => 'Renders a reCaptcha box.',
            'markup' => File::get($path . '_recaptcha.htm'),
        ]);

        FieldType::create([
            'name' => 'Submit',
            'code' => 'submit',
            'description' => 'Renders a submit button.',
            'markup' => File::get($path . '_submit.htm'),
        ]);
    }

}