<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations4 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->text('learning')->nullable();
            $table->text('summary')->nullable();
            $table->text('successful')->nullable();
            $table->text('problem')->nullable();
            $table->text('next')->nullable();
            $table->text('suggestion')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->dropColumn('learning');
            $table->dropColumn('summary');
            $table->dropColumn('successful');
            $table->dropColumn('problem');
            $table->dropColumn('next');
            $table->dropColumn('suggestion');
        });
    }
}