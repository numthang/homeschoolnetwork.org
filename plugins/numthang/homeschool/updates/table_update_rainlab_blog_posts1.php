<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class TableUpdateRainlabBlogPosts1 extends Migration
{

    public function up()
    {
      Schema::table('rainlab_blog_posts', function($table)
      {
        $table->integer('evaluation_id')->nullable()->default(0);
      });
    }

    public function down()
    {
      Schema::table('rainlab_blog_posts', function ($table) {
          $table->dropColumn('evaluation_id');
      });
    }

}