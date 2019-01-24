<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses12 extends Migration
{
    <p>public function up() { Schema::table('numthang_homeschool_courses', function($table) { $table-&gt;increments('id')-&gt;unsigned(false)-&gt;change(); }); } public function down() { Schema::table('numthang_homeschool_courses', function($table) { $table-&gt;increments('id')-&gt;unsigned()-&gt;change(); }); }</p>
}
