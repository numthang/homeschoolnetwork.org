<?php

namespace Renatio\FormBuilder\Tests\Unit\Classes;

use Renatio\FormBuilder\Classes\DuplicateForm;
use Renatio\FormBuilder\Models\Field;
use Renatio\FormBuilder\Models\Form;
use Renatio\FormBuilder\Models\Section;
use Renatio\FormBuilder\Tests\TestCase;

/**
 * Class CloneFormTest
 * @package Renatio\FormBuilder\Tests\Unit\Classes
 */
class CloneFormTest extends TestCase
{

    /**
     * @var
     */
    public $copy;

    /**
     * @var
     */
    public $original;

    /**
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->original = $this->createForm();

        $this->copy = (new DuplicateForm($this->original))->handle();
    }

    /** @test */
    public function it_clones_given_form()
    {
        $this->assertEquals('contact', $this->copy->name);
        $this->assertNotEquals($this->original->id, $this->copy->id);
    }

    /** @test */
    public function it_clones_form_sections()
    {
        $copySection = $this->copy->fresh()->sections->first();
        $originalSection = $this->original->sections()->first();

        $this->assertEquals('main', $copySection->name);
        $this->assertNotEquals($originalSection->id, $copySection->id);
    }

    /** @test */
    public function it_clones_form_fields()
    {
        $copyField = $this->copy->fields->first();
        $copySection = $this->copy->sections->first();

        $this->assertEquals('subject', $copyField->name);
        $this->assertEquals('main', $copyField->section->name);
        $this->assertEquals($copySection->id, $copyField->section->id);
    }

    /**
     * @return mixed
     */
    protected function createForm()
    {
        $form = factory(Form::class)->create(['name' => 'contact']);

        $section = factory(Section::class)->create([
            'form' => $form,
            'name' => 'main',
        ]);

        factory(Field::class)->create([
            'form' => $form,
            'section' => $section,
            'name' => 'subject',
        ]);

        return $form;
    }

}