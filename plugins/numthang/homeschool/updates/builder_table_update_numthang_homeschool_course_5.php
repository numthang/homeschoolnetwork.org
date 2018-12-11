<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourse5 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->renameColumn('name', 'fname');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->renameColumn('fname', 'name');
        });
    }
}
