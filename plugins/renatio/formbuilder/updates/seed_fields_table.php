<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Seeder;
use Renatio\FormBuilder\Models\Field;

/**
 * Class SeedFieldsTable
 * @package Renatio\FormBuilder\Updates
 */
class SeedFieldsTable extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {
        Field::create([
            'form_id' => 1,
            'field_type_id' => 1,
            'label' => 'Example text field',
            'name' => 'text',
            'validation' => 'required',
            'placeholder' => 'Enter some text',
            'nest_left' => 1,
            'nest_right' => 2,
        ]);

        Field::create([
            'form_id' => 1,
            'field_type_id' => 2,
            'label' => 'Example textarea field',
            'name' => 'textarea',
            'validation' => 'required',
            'placeholder' => 'Enter more text',
            'nest_left' => 3,
            'nest_right' => 4,
        ]);

        Field::create([
            'form_id' => 1,
            'field_type_id' => 3,
            'label' => 'Example dropdown field',
            'name' => 'dropdown',
            'validation' => 'required',
            'placeholder' => '-- choose topic --',
            'default' => 'option_2',
            'options' => $this->getDefaultOptions(),
            'nest_left' => 5,
            'nest_right' => 6,
        ]);

        Field::create([
            'form_id' => 1,
            'field_type_id' => 4,
            'label' => 'Example checkbox field',
            'name' => 'checkbox',
            'validation' => 'required',
            'default' => 1,
            'nest_left' => 7,
            'nest_right' => 8,
        ]);

        Field::create([
            'form_id' => 1,
            'field_type_id' => 5,
            'label' => 'Example checkbox list field',
            'name' => 'checkbox_list',
            'validation' => 'required',
            'default' => 'option_1|option_2',
            'options' => $this->getDefaultOptions(),
            'nest_left' => 9,
            'nest_right' => 10,
        ]);

        Field::create([
            'form_id' => 1,
            'field_type_id' => 6,
            'label' => 'Example radio list field',
            'name' => 'radio_list',
            'default' => 'option_2',
            'options' => $this->getDefaultOptions(),
            'nest_left' => 11,
            'nest_right' => 12,
        ]);

        Field::create([
            'form_id' => 1,
            'field_type_id' => 7,
            'label' => 'Example reCaptcha field',
            'name' => 'g-recaptcha-response',
            'validation' => 'required|recaptcha',
            'nest_left' => 13,
            'nest_right' => 14,
        ]);

        Field::create([
            'form_id' => 1,
            'field_type_id' => 8,
            'label' => 'Example submit field',
            'name' => 'submit',
            'nest_left' => 15,
            'nest_right' => 16,
        ]);
    }

    /**
     * @return array
     */
    protected function getDefaultOptions()
    {
        return [
            '1' => [
                'key' => 'option_1',
                'label' => 'Option 1',
            ],
            '2' => [
                'key' => 'option_2',
                'label' => 'Option 2',
            ],
        ];
    }

}