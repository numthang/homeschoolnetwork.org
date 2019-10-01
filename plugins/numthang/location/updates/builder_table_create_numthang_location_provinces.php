<?php namespace Numthang\Location\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNumthangLocationProvinces extends Migration
{
    public function up()
    {
        Schema::create('numthang_location_provinces', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('code');
            $table->text('name_th');
            $table->text('name_en');
            $table->integer('geography_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('numthang_location_provinces');
    }
}
