<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
