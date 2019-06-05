<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations10 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->string('portfolio', 50)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->dropColumn('portfolio');
        });
    }
}
