<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class CreateFieldTypesTable
 * @package Renatio\FormBuilder\Updates
 */
class CreateFieldTypesTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::create('renatio_formbuilder_field_types', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('code')->unique();
            $table->text('markup')->nullable();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renatio_formbuilder_field_types');
    }

}