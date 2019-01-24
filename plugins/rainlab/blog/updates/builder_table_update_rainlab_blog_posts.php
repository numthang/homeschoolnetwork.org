<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogPosts extends Migration
{
    <p>public function up() { Schema::table('rainlab_blog_posts', function($table) { $table-&gt;integer('test'); }); } public function down() { Schema::table('rainlab_blog_posts', function($table) { $table-&gt;dropColumn('test'); }); }</p>
}
