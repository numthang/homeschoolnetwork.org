<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNumthangHomeschoolEvaluations extends Migration
{
    public function up()
    {
        Schema::create('numthang_homeschool_evaluations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('numthang_homeschool_evaluations');
    }
}