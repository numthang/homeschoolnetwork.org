<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourse4 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->smallInteger('test');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->dropColumn('test');
        });
    }
}
