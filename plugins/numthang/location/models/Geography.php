<?php namespace Numthang\Location\Models;

use Model;

/**
 * Model
 */
class Geography extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'numthang_location_geographies';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public static function formSelect($name, $selectedValue = null, $options = [])
    {
      return Form::select($name, self::getNameList(), $selectedValue, $options);
    }
}
