<?php namespace Numthang\Location\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNumthangLocationDistricts extends Migration
{
    public function up()
    {
        Schema::create('numthang_location_districts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('zip_code');
            $table->string('name_th', 150);
            $table->string('name_en', 150);
            $table->integer('amphure_id');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('numthang_location_districts');
    }
}
