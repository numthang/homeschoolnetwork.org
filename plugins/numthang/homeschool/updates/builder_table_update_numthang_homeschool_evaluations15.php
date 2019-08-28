<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations15 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->dropColumn('table5');
            $table->dropColumn('table6');
            $table->dropColumn('summary');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->text('table5')->nullable();
            $table->text('table6')->nullable();
            $table->text('summary')->nullable();
        });
    }
}