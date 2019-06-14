<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class AddReplyToFields
 * @package Renatio\FormBuilder\Updates
 */
class AddReplyToFields extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::table('renatio_formbuilder_forms', function ($table) {
            $table->unsignedInteger('reply_email_field_id')->nullable();
            $table->unsignedInteger('reply_name_field_id')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::table('renatio_formbuilder_forms', function ($table) {
            $table->dropColumn(['reply_email_field_id', 'reply_name_field_id']);
        });
    }

}