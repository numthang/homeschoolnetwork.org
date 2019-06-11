<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations11 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->renameColumn('portfolio', 'portfolios');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->renameColumn('portfolios', 'portfolio');
        });
    }
}