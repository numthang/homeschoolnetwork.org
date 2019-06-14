<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class AddValidationMessagesColumnToFieldsTable
 * @package Renatio\FormBuilder\Updates
 */
class AddValidationMessagesColumnToFieldsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::table('renatio_formbuilder_fields', function ($table) {
            $table->text('validation_messages')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::table('renatio_formbuilder_fields', function ($table) {
            $table->dropColumn('validation_messages');
        });
    }

}