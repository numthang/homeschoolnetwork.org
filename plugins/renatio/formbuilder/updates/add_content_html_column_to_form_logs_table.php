<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class AddContentHtmlColumnToFormLogsTable
 * @package Renatio\FormBuilder\Updates
 */
class AddContentHtmlColumnToFormLogsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::table('renatio_formbuilder_form_logs', function ($table) {
            $table->text('content_html')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::table('renatio_formbuilder_form_logs', function ($table) {
            $table->dropColumn('content_html');
        });
    }

}