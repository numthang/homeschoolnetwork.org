<?php

namespace Renatio\FormBuilder\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;
use October\Rain\Exception\ApplicationException;
use System\Models\MailTemplate;

/**
 * Class Form
 * @package Renatio\FormBuilder\Models
 */
class Form extends Model
{

    use Validation;
    use Sluggable;

    /**
     * @var array
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var string
     */
    public $table = 'renatio_formbuilder_forms';

    /**
     * @var array
     */
    public $rules = [
        'name' => 'required|max:255',
        'template' => 'required',
        'to_email' => 'required|email|max:100',
        'to_name' => 'required|max:255',
        'reply_email' => 'email|max:100',
        'reply_name' => 'max:255',
        'from_email' => 'email|max:100',
        'bcc_email' => 'email|max:100',
        'from_name' => 'max:255',
        'bcc_name' => 'max:255',
        'css_class' => 'max:255',
        'response_email_field' => 'max:255',
    ];

    /**
     * @var array
     */
    public $attributeNames = [
        'name' => 'renatio.formbuilder::lang.field.name',
        'template' => 'renatio.formbuilder::lang.field.template',
        'to_email' => 'renatio.formbuilder::lang.field.to_email',
        'to_name' => 'renatio.formbuilder::lang.field.to_name',
        'reply_email' => 'renatio.formbuilder::lang.field.reply_email',
        'reply_name' => 'renatio.formbuilder::lang.field.reply_name',
        'from_email' => 'renatio.formbuilder::lang.field.from_email',
        'bcc_email' => 'renatio.formbuilder::lang.field.bcc_email',
        'from_name' => 'renatio.formbuilder::lang.field.from_name',
        'bcc_name' => 'renatio.formbuilder::lang.field.bcc_name',
        'css_class' => 'renatio.formbuilder::lang.field.css_class',
        'response_email_field' => 'renatio.formbuilder::lang.field.response_email_field',
    ];

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    public $translatable = [
        'name',
        'description',
        'from_email',
        'from_name',
        'to_email',
        'to_name',
        'replay_email',
        'replay_name',
        'bcc_email',
        'bcc_name',
        'success_message',
        'error_message',
    ];

    /**
     * @var array
     */
    protected $slugs = ['code' => 'name'];

    /**
     * @var array
     */
    public $hasMany = [
        'fields' => Field::class,
        'sections' => [Section::class, 'order' => 'sort_order'],
    ];

    /**
     * @var array
     */
    public $belongsTo = [
        'template' => MailTemplate::class,
        'reply_email_field' => [Field::class, 'scope' => 'forCurrentForm'],
        'reply_name_field' => [Field::class, 'scope' => 'forCurrentForm'],
    ];

    /**
     * @return void
     */
    public function afterDelete()
    {
        foreach ($this->fields as $field) {
            $field->delete();
        }

        foreach ($this->sections as $section) {
            $section->delete();
        }
    }

    /**
     * @param $formCode
     * @return mixed
     * @throws ApplicationException
     */
    public function getByCode($formCode)
    {
        if ( ! $formCode) {
            throw new ApplicationException(trans('renatio.formbuilder::lang.error.missing_code'));
        }

        $form = $this->getFormByCode($formCode);

        if ( ! $form) {
            throw new ApplicationException(trans('renatio.formbuilder::lang.error.form_not_found'));
        }

        return $form;
    }

    /**
     * @return array
     */
    public function buildValidationRules()
    {
        $rules = [];

        foreach ($this->fields as $field) {
            if ($field->validation) {
                $rules[$field->name] = $field->validation;
            }
        }

        return $rules;
    }

    /**
     * @return array
     */
    public function customMessages()
    {
        $messages = [];

        foreach ($this->fields as $field) {
            if ($field->validation_messages) {
                foreach ($field->validation_messages as $customMessage) {
                    $key = $field->name . '.' . $customMessage['rule'];
                    $messages[$key] = trans($customMessage['message']);
                }

            }
        }

        return $messages;
    }

    /**
     * @return array
     */
    public function buildAttributeNames()
    {
        return $this->iterateFields('name', 'label');
    }

    /**
     * Get data from the form
     *
     * @return array
     */
    public function getPostData()
    {
        $data = [];

        foreach ($this->fields as $field) {
            $parts = explode('[', $field->name);
            $field->name = array_shift($parts);
            $data[$field->name] = $field->postValue();
        }

        $data['form'] = $this;

        return $data;
    }

    /**
     * Iterate form fields
     *
     * @param $key
     * @param $value
     * @param bool $fromPost
     * @return array
     */
    protected function iterateFields($key, $value, $fromPost = false)
    {
        $arr = [];

        foreach ($this->fields as $field) {
            $arr[$field->{$key}] = $fromPost ? post($field->{$value}) : $field->{$value};
        }

        return $arr;
    }

    /**
     * @return bool
     */
    public function hasFilesUpload()
    {
        return $this->checkForUploadFields('file_uploader');
    }

    /**
     * @param $uploadType
     * @return bool
     */
    protected function checkForUploadFields($uploadType)
    {
        foreach ($this->fields as $field) {
            if ($field->field_type->code == $uploadType) {
                return $field;
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getFormData()
    {
        $formData = [];

        foreach ($this->fields as $field) {
            $formData[$field->name] = [
                'label' => $field->label,
                'value' => $field->postValue()
            ];
        }

        return $formData;
    }

    /**
     * @param $formCode
     * @return mixed
     */
    protected function getFormByCode($formCode)
    {
        return self::with([
            'fields' => function ($query) {
                $query->isVisible()->with(['section', 'field_type']);
            },
            'sections' => function ($query) {
                $query->isVisible()->with('fields.field_type');
            },
        ])->whereCode($formCode)->first();
    }

}