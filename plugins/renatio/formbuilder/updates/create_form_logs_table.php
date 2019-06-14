<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class CreateFormLogsTable
 * @package Renatio\FormBuilder\Updates
 */
class CreateFormLogsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::create('renatio_formbuilder_form_logs', function ($table) {
            $table->increments('id');
            $table->unsignedInteger('form_id')->index();
            $table->text('form_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renatio_formbuilder_form_logs');
    }

}