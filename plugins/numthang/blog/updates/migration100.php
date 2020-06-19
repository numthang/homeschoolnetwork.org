<?php namespace Numthang\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration100 extends Migration
{
    public function up()
    {
        // Schema::create('numthang_blog_table', function($table)
        // {
        // });
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->boolean('featured')->default(false);
            $table->integer('evaluation_id')->nullable();
        });
    }

    public function down()
    {
        // Schema::drop('numthang_blog_table');
        if (Schema::hasTable('rainlab_blog_posts')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->dropColumn(['featured', 'evaluation_id']);
            });
        }
    }
}