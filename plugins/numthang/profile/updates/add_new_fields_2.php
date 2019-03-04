<?php namespace Numthang\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields2 extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
          $table->text('note')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['note']);
            });
        }
        $table->dropDown([
          'note'
        ]);
    }

}
