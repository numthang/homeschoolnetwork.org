<?php namespace Numthang\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields3 extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
          $table->bigInteger('facebook_id')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['facebook_id']);
            });
        }
    }

}