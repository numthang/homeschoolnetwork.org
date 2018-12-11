<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class CreateSectionsTable
 * @package Renatio\FormBuilder\Updates
 */
class CreateSectionsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::create('renatio_formbuilder_sections', function ($table) {
            $table->increments('id');
            $table->unsignedInteger('form_id')->index()->nullable();
            $table->unsignedInteger('sort_order')->index()->nullable();
            $table->string('label')->nullable();
            $table->string('name');
            $table->string('class')->nullable();
            $table->text('wrapper_begin')->nullable();
            $table->text('wrapper_end')->nullable();
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
        });

        Schema::table('renatio_formbuilder_fields', function ($table) {
            $table->unsignedInteger('section_id')->index()->nullable();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renatio_formbuilder_sections');

        Schema::table('renatio_formbuilder_fields', function ($table) {
            $table->dropColumn('section_id');
        });
    }

}