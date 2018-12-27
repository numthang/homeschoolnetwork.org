<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses6 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->text('student_name');
            $table->date('birth_date');
            $table->text('school_exp');
            $table->text('development');
            $table->text('class_reason');
            $table->string('hs_name', 100)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('name', 100)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->dropColumn('student_name');
            $table->dropColumn('birth_date');
            $table->dropColumn('school_exp');
            $table->dropColumn('development');
            $table->dropColumn('class_reason');
            $table->text('hs_name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('name')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
