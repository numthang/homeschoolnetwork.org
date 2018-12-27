<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses7 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->text('student_name')->nullable()->change();
            $table->date('birth_date')->nullable()->change();
            $table->text('school_exp')->nullable()->change();
            $table->text('development')->nullable()->change();
            $table->text('class_reason')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->text('student_name')->nullable(false)->change();
            $table->date('birth_date')->nullable(false)->change();
            $table->text('school_exp')->nullable(false)->change();
            $table->text('development')->nullable(false)->change();
            $table->text('class_reason')->nullable(false)->change();
        });
    }
}
