<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Seeder;
use Renatio\FormBuilder\Models\Form;
use System\Models\MailTemplate;

/**
 * Class SeedDefaultForm
 * @package Renatio\FormBuilder\Updates
 */
class SeedDefaultForm extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {
        MailTemplate::syncAll();

        $this->createDefaultForm();
    }

    /**
     * @return void
     */
    protected function createDefaultForm()
    {
        $template = MailTemplate::query()
            ->where('code', 'renatio.formbuilder::mail.default')
            ->first();

        $form = $this->createForm($template);

        $this->createFields($form);
    }

    /**
     * @param $template
     * @return \Illuminate\Database\Eloquent\Model|Form
     */
    protected function createForm($template)
    {
        return Form::create([
            'template' => $template,
            'name' => 'Default Form',
            'description' => 'Renders a form with all available system fields.',
            'to_email' => 'admin@domain.tld',
            'to_name' => 'Admin Person',
        ]);
    }

    /**
     * @param $form
     */
    protected function createFields($form)
    {
        foreach ($this->fields() as $field) {
            $form->fields()->create([
                'field_type_id' => $field['type'],
                'label' => $field['label'],
                'name' => $field['name'],
                'options' => $field['options'] ?? null,
                'placeholder' => $field['placeholder'] ?? null,
                'validation' => $field['validation'] ?? null,
            ]);
        }
    }

    /**
     * @return array
     */
    protected function fields()
    {
        return [
            [
                'type' => 1,
                'label' => 'Text',
                'name' => 'text',
                'validation' => 'required',
            ],
            [
                'type' => 3,
                'label' => 'Dropdown',
                'name' => 'dropdown',
                'options' => $this->options(),
                'placeholder' => '-- choose --',
                'validation' => 'required',
            ],
            [
                'type' => 4,
                'label' => 'Checkbox',
                'name' => 'checkbox',
                'validation' => 'required',
            ],
            [
                'type' => 5,
                'label' => 'Checkbox list',
                'name' => 'checkbox_list',
                'options' => $this->options(),
                'validation' => 'required',
            ],
            [
                'type' => 6,
                'label' => 'Radio list',
                'name' => 'radio_list',
                'options' => $this->options(),
                'validation' => 'required',
            ],
            [
                'type' => 10,
                'label' => 'Country select',
                'name' => 'country',
                'validation' => 'required',
                'placeholder' => '-- choose --',
            ],
            [
                'type' => 11,
                'label' => 'State select',
                'name' => 'state',
                'validation' => 'required',
                'placeholder' => '-- choose --',
            ],
            [
                'type' => 2,
                'label' => 'Textarea',
                'name' => 'textarea',
                'validation' => 'required',
            ],
            [
                'type' => 9,
                'label' => 'File uploader',
                'name' => 'files',
            ],
            [
                'type' => 7,
                'label' => 'reCaptcha',
                'name' => 'g-recaptcha-response',
                'validation' => 'required|recaptcha',
            ],
            [
                'type' => 8,
                'label' => 'Send',
                'name' => 'submit',
            ],
        ];
    }

    /**
     * @return array
     */
    protected function options()
    {
        return [
            '1' => [
                'o_key' => 'option_1',
                'o_label' => 'Option 1',
            ],
            '2' => [
                'o_key' => 'option_2',
                'o_label' => 'Option 2',
            ],
        ];
    }

}