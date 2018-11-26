<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourse3 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_course', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
