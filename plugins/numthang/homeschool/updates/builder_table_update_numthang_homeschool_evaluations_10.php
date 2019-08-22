<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations10 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->text('part1_1')->nullable();
            $table->text('part2_1')->nullable();
            $table->text('part2_2')->nullable();
            $table->text('part2_3')->nullable();
            $table->text('part2_4')->nullable();
            $table->text('part2_5')->nullable();
            $table->text('table1')->nullable();
            $table->text('table2')->nullable();
            $table->text('table3')->nullable();
            $table->text('table4')->nullable();
            $table->text('table5')->nullable();
            $table->text('table6')->nullable();
            $table->dropColumn('learning');
            $table->dropColumn('summary');
            $table->dropColumn('successful');
            $table->dropColumn('problem');
            $table->dropColumn('next');
            $table->dropColumn('suggestion');
            $table->dropColumn('footprint');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->dropColumn('part1_1');
            $table->dropColumn('part2_1');
            $table->dropColumn('part2_2');
            $table->dropColumn('part2_3');
            $table->dropColumn('part2_4');
            $table->dropColumn('part2_5');
            $table->dropColumn('table1');
            $table->dropColumn('table2');
            $table->dropColumn('table3');
            $table->dropColumn('table4');
            $table->dropColumn('table5');
            $table->dropColumn('table6');
            $table->text('learning')->nullable();
            $table->text('summary')->nullable();
            $table->text('successful')->nullable();
            $table->text('problem')->nullable();
            $table->text('next')->nullable();
            $table->text('suggestion')->nullable();
            $table->text('footprint')->nullable();
        });
    }
}
