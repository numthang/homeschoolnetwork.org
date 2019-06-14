<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class CreateFieldsTable
 * @package Renatio\FormBuilder\Updates
 */
class CreateFieldsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::create('renatio_formbuilder_fields', function ($table) {
            $table->increments('id');
            $table->unsignedInteger('form_id')->index()->nullable();
            $table->unsignedInteger('field_type_id')->index();
            $table->string('label')->nullable();
            $table->string('name');
            $table->string('default')->nullable();
            $table->string('validation')->nullable();
            $table->string('class')->nullable();
            $table->string('placeholder')->nullable();
            $table->string('custom_attributes')->nullable();
            $table->text('options')->nullable();
            $table->boolean('is_visible')->default(true);
            $table->unsignedInteger('parent_id')->index()->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renatio_formbuilder_fields');
    }

}