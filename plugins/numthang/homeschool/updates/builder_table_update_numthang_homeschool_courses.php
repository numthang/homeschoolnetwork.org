<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses extends Migration
{
    public function up()
    {
        Schema::rename('numthang_homeschool_course', 'numthang_homeschool_courses');
    }
    
    public function down()
    {
        Schema::rename('numthang_homeschool_courses', 'numthang_homeschool_course');
    }
}
