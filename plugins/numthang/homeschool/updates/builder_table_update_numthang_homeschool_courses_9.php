<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses9 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->integer('moderator_id')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->dropColumn('moderator_id');
        });
    }
}
