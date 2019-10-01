<?php namespace Numthang\Location\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangLocationProvinces extends Migration
{
    public function up()
    {
        Schema::table('numthang_location_provinces', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('numthang_location_provinces', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
