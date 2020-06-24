<?php namespace Numthang\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration103 extends Migration
{
    public function up()
    {
        // Schema::create('numthang_blog_table', function($table)
        // {
        // });
         Schema::table('ginopane_blogtaxonomy_tags', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }

    public function down()
    {
        // Schema::drop('numthang_blog_table');
         if (Schema::hasTable('ginopane_blogtaxonomy_tags')) {
            Schema::table('ginopane_blogtaxonomy_tags', function ($table) {
                $table->dropColumn(['user_id']);
            });
        }
    }
}