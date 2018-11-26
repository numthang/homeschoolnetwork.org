<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourse extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->text('first_name');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->dropColumn('first_name');
        });
    }
}
