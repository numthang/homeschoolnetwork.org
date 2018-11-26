<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNumthangHomeschoolCourse extends Migration
{
    public function up()
    {
        Schema::create('numthang_homeschool_course', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('introduction');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('numthang_homeschool_course');
    }
}
