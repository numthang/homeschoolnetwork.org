<?php

namespace Renatio\FormBuilder\Traits;

use Input;
use Renatio\FormBuilder\Models\FormLog;
use Request;
use Validator;
use ValidationException;
use ApplicationException;
use System\Models\File;

/**
 * Class FileUploader
 * @package Renatio\FormBuilder\Traits
 */
trait FileUploader
{

    /**
     * @var array
     */
    protected $fileConfig;

    /**
     * Check upload
     *
     * @return array|void
     * @throws ApplicationException
     * @throws ValidationException
     */
    private function checkUploadAction()
    {
        $rules = $this->setValidationRules();

        $uploadedFile = Input::file('file_data');
        if ( ! Request::isMethod('POST') || ! is_object($uploadedFile)) {
            return;
        }

        $validation = Validator::make(
            ['file_data' => $uploadedFile],
            ['file_data' => $rules]
        );
        $validation->setAttributeNames(['file_data' => trans('renatio.formbuilder::lang.field.file_data')]);

        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        if ( ! $uploadedFile->isValid()) {
            throw new ApplicationException(trans('renatio.formbuilder::lang.file.not_valid',
                ['filename' => $uploadedFile->getClientOriginalName()]));
        }

        $file = $this->saveFile($uploadedFile);

        return [
            'id'   => $file->id,
            'path' => $file->getLocalPath()
        ];
    }

    /**
     * Get session key
     *
     * @return \Illuminate\Routing\Route|mixed
     */
    public function getSessionKey()
    {
        return post('_session_key');
    }

    /**
     * Process file types
     *
     * @param $fileTypes
     * @return array
     */
    protected function processFileTypes($fileTypes)
    {
        $result = [];

        if ($fileTypes != '*') {
            foreach (explode(',', $fileTypes) as $type) {
                $type = trim($type);

                if (substr($type, 0, 1) != '.') {
                    $type = '.' . $type;
                }

                $result[] = $type;
            }
        } else {
            $result[] = '*';
        }

        return $result;
    }

    /**
     * Set validation rules
     *
     * @return string
     */
    protected function setValidationRules()
    {
        $rules = '';

        if ($this->form) {
            if ($field = $this->form->hasFilesUpload()) {
                $rules = $field->validation;
            }
        }

        return $rules;
    }

    /**
     * Save uploaded file
     *
     * @param $uploadedFile
     * @return File
     */
    protected function saveFile($uploadedFile)
    {
        $file = new File;
        $file->data = $uploadedFile;
        $file->is_public = true;
        $file->save();

        $model = new FormLog;

        $model->files()->add($file, $this->getSessionKey());

        return $file;
    }

}
