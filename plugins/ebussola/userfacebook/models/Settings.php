<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Shinagawa
 * Date: 16/03/15
 * Time: 23:28
 */

namespace eBussola\Userfacebook\Models;


use October\Rain\Database\Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'ebussola_userfacebook_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

}