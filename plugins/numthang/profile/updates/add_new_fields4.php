<?php namespace Numthang\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields4 extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
          $table->string('twitter')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['twitter']);
            });
        }
    }

}