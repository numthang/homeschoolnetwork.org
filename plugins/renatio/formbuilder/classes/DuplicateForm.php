<?php

namespace Renatio\FormBuilder\Classes;

/**
 * Class DuplicateForm
 * @package Renatio\FormBuilder\Classes
 */
class DuplicateForm
{

    /**
     * @var
     */
    protected $original;

    /**
     * @var
     */
    protected $copy;

    public function __construct($original)
    {
        $this->original = $original;
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        $this->duplicateForm();

        return $this->copy;
    }

    /**
     * @return void
     */
    protected function duplicateForm()
    {
        $this->makeCopy();

        $sectionsLookup = $this->duplicateSections();

        $this->duplicateFields($sectionsLookup);
    }

    /**
     * @return mixed
     */
    protected function makeCopy()
    {
        $this->original->load('fields', 'sections');

        $this->copy = $this->original->replicate();

        $this->saveCopy();
    }

    /**
     * @return void
     */
    protected function saveCopy()
    {
        $this->copy->code = $this->original->code . time();
        $this->copy->save();
    }

    /**
     * @return array
     */
    protected function duplicateSections()
    {
        $lookup = [];

        foreach ($this->copy->sections as $section) {
            $s = $section->replicate();

            if ($s->push()) {
                $this->copy->sections()->save($s);
                $lookup[$section->id] = $s->id;
            }
        }

        return $lookup;
    }

    /**
     * @param $sectionsLookup
     */
    protected function duplicateFields($sectionsLookup)
    {
        foreach ($this->copy->fields as $field) {
            $f = $field->replicate();
            $f->section_id = $field->section_id ? $sectionsLookup[$field->section_id] : null;

            if ($f->push()) {
                $this->copy->fields()->save($f);
            }
        }
    }

}