<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class AddCssClassColumnToFormsTable
 * @package Renatio\FormBuilder\Updates
 */
class AddCssClassColumnToFormsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::table('renatio_formbuilder_forms', function ($table) {
            $table->string('css_class')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::table('renatio_formbuilder_forms', function ($table) {
            $table->dropColumn('css_class');
        });
    }

}