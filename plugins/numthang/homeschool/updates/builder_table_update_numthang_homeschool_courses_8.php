<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses8 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->text('edu_purpose')->nullable();
            $table->text('edu_type')->nullable();
            $table->text('schedule')->nullable();
            $table->text('curriculum')->nullable();
            $table->text('activity')->nullable();
            $table->text('learning')->nullable();
            $table->text('evaluate')->nullable();
            $table->text('other')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->dropColumn('edu_purpose');
            $table->dropColumn('edu_type');
            $table->dropColumn('schedule');
            $table->dropColumn('curriculum');
            $table->dropColumn('activity');
            $table->dropColumn('learning');
            $table->dropColumn('evaluate');
            $table->dropColumn('other');
        });
    }
}
