<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class AddCommentColumnToFieldsTable
 * @package Renatio\FormBuilder\Updates
 */
class AddCommentColumnToFieldsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::table('renatio_formbuilder_fields', function ($table) {
            $table->text('comment')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::table('renatio_formbuilder_fields', function ($table) {
            $table->dropColumn('comment');
        });
    }

}