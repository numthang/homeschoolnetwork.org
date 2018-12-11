<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Seeder;
use Renatio\FormBuilder\Models\Form;
use System\Models\MailTemplate;

/**
 * Class SeedContactForm
 * @package Renatio\FormBuilder\Updates
 */
class SeedContactForm extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {
        MailTemplate::syncAll();

        $this->createContactForm();
    }

    /**
     * @return void
     */
    protected function createContactForm()
    {
        $template = MailTemplate::query()
            ->where('code', 'renatio.formbuilder::mail.contact')
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
            'name' => 'Contact Form',
            'description' => 'Renders a contact form.',
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
                'label' => 'Name',
                'name' => 'name',
                'validation' => 'required',
            ],
            [
                'type' => 1,
                'label' => 'Subject',
                'name' => 'subject',
                'validation' => 'required',
            ],
            [
                'type' => 1,
                'label' => 'E-mail',
                'name' => 'email',
                'validation' => 'required|email',
            ],
            [
                'type' => 1,
                'label' => 'Phone',
                'name' => 'phone',
            ],
            [
                'type' => 2,
                'label' => 'Message',
                'name' => 'content_message',
                'validation' => 'required',
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

}