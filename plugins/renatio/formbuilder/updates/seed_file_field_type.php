<?php

namespace Renatio\FormBuilder\Updates;

use Illuminate\Support\Facades\File;
use October\Rain\Database\Updates\Seeder;
use Renatio\FormBuilder\Models\FieldType;

/**
 * Class SeedFileFieldType
 * @package Renatio\FormBuilder\Updates
 */
class SeedFileFieldType extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {
        FieldType::create([
            'name' => 'File uploader',
            'code' => 'file_uploader',
            'description' => 'Renders a file uploader for regular files.',
            'markup' => File::get(__DIR__ . '/fields/_file_uploader.htm')
        ]);
    }

}