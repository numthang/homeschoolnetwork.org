<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations3 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
