<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolEvaluations14 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->text('part1_label')->nullable();
            $table->text('part1')->nullable();
            $table->text('part2_label')->nullable();
            $table->text('part2')->nullable();
            $table->text('part3_label')->nullable();
            $table->text('part3')->nullable();
            $table->text('part4_label')->nullable();
            $table->text('part4')->nullable();
            $table->dropColumn('part_1_label');
            $table->dropColumn('part_1');
            $table->dropColumn('part_2_label');
            $table->dropColumn('part_2');
            $table->dropColumn('part_3_label');
            $table->dropColumn('part_3');
            $table->dropColumn('part_4_label');
            $table->dropColumn('part_4');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_evaluations', function($table)
        {
            $table->dropColumn('part1_label');
            $table->dropColumn('part1');
            $table->dropColumn('part2_label');
            $table->dropColumn('part2');
            $table->dropColumn('part3_label');
            $table->dropColumn('part3');
            $table->dropColumn('part4_label');
            $table->dropColumn('part4');
            $table->text('part_1_label')->nullable();
            $table->text('part_1')->nullable();
            $table->text('part_2_label')->nullable();
            $table->text('part_2')->nullable();
            $table->text('part_3_label')->nullable();
            $table->text('part_3')->nullable();
            $table->text('part_4_label')->nullable();
            $table->text('part_4')->nullable();
        });
    }
}
