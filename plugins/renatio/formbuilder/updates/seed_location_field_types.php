<?php

namespace Renatio\FormBuilder\Updates;

use Illuminate\Support\Facades\File;
use October\Rain\Database\Updates\Seeder;
use Renatio\FormBuilder\Models\FieldType;

/**
 * Class SeedLocationFieldTypes
 * @package Renatio\FormBuilder\Updates
 */
class SeedLocationFieldTypes extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {
        $path = __DIR__ . '/fields/';

        FieldType::create([
            'name' => 'Country select',
            'code' => 'country_select',
            'description' => 'Renders a dropdown with country options.',
            'markup' => File::get($path . '_country_select.htm'),
        ]);

        FieldType::create([
            'name' => 'State select',
            'code' => 'state_select',
            'description' => 'Renders a dropdown with state options.',
            'markup' => File::get($path . '_state_select.htm'),
        ]);
    }

}