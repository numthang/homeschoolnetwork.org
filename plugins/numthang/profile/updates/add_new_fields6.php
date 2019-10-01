<?php namespace Numthang\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields6 extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
          $table->integer('amphure_id')->nullable();
          $table->integer('district_id')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['amphure_id', 'district_id']);
            });
        }
    }

}