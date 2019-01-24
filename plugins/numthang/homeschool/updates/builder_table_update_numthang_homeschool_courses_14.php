<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses14 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->smallInteger('template')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->smallInteger('template')->unsigned(false)->change();
        });
    }
}
