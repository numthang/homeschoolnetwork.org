<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourse5 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->renameColumn('first_name', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->renameColumn('name', 'first_name');
        });
    }
}
