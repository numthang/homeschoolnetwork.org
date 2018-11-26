<?php

use eBussola\Userfacebook\Models\Settings;
use October\Rain\Database\Updates\Migration;

class AddSettings extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Settings::get('app_id', false)) {
            Settings::set('app_id', \Config::get('ebussola.userfacebook::facebook.app_id'));
            Settings::set('app_secret', \Config::get('ebussola.userfacebook::facebook.app_secret'));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}
