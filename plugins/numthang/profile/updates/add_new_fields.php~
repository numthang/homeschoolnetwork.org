<?php namespace Numthang\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
          $table->string('website')->nullable();
          $table->string('facebook')->nullable();
          $table->string('line')->nullable();
          $table->string('status')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['website', 'facebook', 'line', 'status']);
            });
        }
        /*$table->dropDown([
          'website',
          'facebook',
          'line',
          'status'
        ]);*/
    }

}
