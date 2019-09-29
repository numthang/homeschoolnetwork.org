<?php namespace Numthang\Location\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNumthangLocationAmphures extends Migration
{
    public function up()
    {
        Schema::create('numthang_location_amphures', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code', 4);
            $table->string('name_th', 150);
            $table->string('name_en', 150);
            $table->integer('province_id')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('numthang_location_amphures');
    }
}
