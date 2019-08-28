<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations13 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->text('user_id')->nullable();
            $table->text('template')->nullable();
            $table->text('part_1_label')->nullable();
            $table->text('part_1')->nullable();
            $table->text('part_2_label')->nullable();
            $table->text('part_2')->nullable();
            $table->text('part_3_label')->nullable();
            $table->text('part_3')->nullable();
            $table->text('part_4_label')->nullable();
            $table->text('part_4')->nullable();
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
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->dropColumn('user_id');
            $table->dropColumn('template');
            $table->dropColumn('part_1_label');
            $table->dropColumn('part_1');
            $table->dropColumn('part_2_label');
            $table->dropColumn('part_2');
            $table->dropColumn('part_3_label');
            $table->dropColumn('part_3');
            $table->dropColumn('part_4_label');
            $table->dropColumn('part_4');
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
        });
    }
}
