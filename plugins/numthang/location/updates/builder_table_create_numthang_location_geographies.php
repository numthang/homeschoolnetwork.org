<?php namespace Numthang\Location\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNumthangLocationGeographies extends Migration
{
    public function up()
    {
        Schema::create('numthang_location_geographies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned(false);
            $table->string('name', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('numthang_location_geographies');
    }
}