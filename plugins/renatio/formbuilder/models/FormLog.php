<?php

namespace Renatio\FormBuilder\Models;

use Model;

/**
 * Class FormLog
 * @package Renatio\FormBuilder\Models
 */
class FormLog extends Model
{

    /**
     * @var string
     */
    public $table = 'renatio_formbuilder_form_logs';

    /**
     * @var array
     */
    protected $jsonable = ['form_data'];

    /**
     * @var array
     */
    protected $fillable = ['form_data', 'html_content'];

    /**
     * @var array
     */
    public $belongsTo = [
        'form' => ['Renatio\FormBuilder\Models\Form']
    ];

    /**
     * @var array
     */
    public $attachMany = [
        'files' => ['System\Models\File', 'public' => false]
    ];

    /**
     * @return void
     */
    public function afterDelete()
    {
        $this->deleteFiles();
    }

    /**
     * @param Form $form
     */
    public function log(Form $form)
    {
        $this->form_id = $form->id;
        $this->form_data = $form->getFormData();
        $this->save(null, post('_session_key'));
    }

    /**
     * @return void
     */
    private function deleteFiles()
    {
        foreach ($this->files as $file) {
            $file->delete();
        }
    }

}
