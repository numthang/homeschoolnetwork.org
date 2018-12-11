<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

/**
 * Class AddReplyAndAutoResponseFields
 * @package Renatio\FormBuilder\Updates
 */
class AddReplyAndAutoResponseFields extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::table('renatio_formbuilder_forms', function ($table) {
            $table->string('reply_email')->nullable();
            $table->string('reply_name')->nullable();
            $table->string('response_email_field')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::table('renatio_formbuilder_forms', function ($table) {
            $table->dropColumn(['reply_email', 'reply_name', 'response_email_field']);
        });
    }

}