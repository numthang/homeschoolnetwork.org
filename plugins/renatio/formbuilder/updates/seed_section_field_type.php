<?php

namespace Renatio\FormBuilder\Updates;

use Illuminate\Support\Facades\File;
use October\Rain\Database\Updates\Seeder;
use Renatio\FormBuilder\Models\FieldType;

/**
 * Class SeedSectionFieldType
 * @package Renatio\FormBuilder\Updates
 */
class SeedSectionFieldType extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {
        FieldType::create([
            'name' => 'Section',
            'code' => 'section',
            'description' => 'Renders a section with assigned fields.',
            'markup' => File::get(__DIR__ . '/fields/_section.htm'),
        ]);
    }

}