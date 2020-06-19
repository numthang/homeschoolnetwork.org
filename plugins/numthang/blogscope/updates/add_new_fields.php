<?php namespace Numthang\BlogScope\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->integer('evaluation_id')->nullable();

        });
    }

    public function down()
    {
        if (Schema::hasTable('rainlab_blog_posts')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->dropColumn(['evaluation_id']);
            });
        }
    }

}