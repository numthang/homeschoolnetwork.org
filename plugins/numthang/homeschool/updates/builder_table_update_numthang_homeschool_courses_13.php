<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses13 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->text('part1_label')->nullable();
            $table->text('part1')->nullable();
            $table->text('part2_label')->nullable();
            $table->text('part2')->nullable();
            $table->text('part3_label')->nullable();
            $table->text('part3')->nullable();
            $table->text('part4_label')->nullable();
            $table->text('part4')->nullable();
            $table->dropColumn('class_reason');
            $table->dropColumn('purpose');
            $table->dropColumn('format');
            $table->dropColumn('schedule');
            $table->dropColumn('curriculum');
            $table->dropColumn('activity');
            $table->dropColumn('learning');
            $table->dropColumn('evaluate');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->dropColumn('part1_label');
            $table->dropColumn('part1');
            $table->dropColumn('part2_label');
            $table->dropColumn('part2');
            $table->dropColumn('part3_label');
            $table->dropColumn('part3');
            $table->dropColumn('part4_label');
            $table->dropColumn('part4');
            $table->text('class_reason')->nullable();
            $table->text('purpose')->nullable();
            $table->text('format')->nullable();
            $table->text('schedule')->nullable();
            $table->text('curriculum')->nullable();
            $table->text('activity')->nullable();
            $table->text('learning')->nullable();
            $table->text('evaluate')->nullable();
        });
    }
}
