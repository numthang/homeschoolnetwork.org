<?php namespace Numthang\Location\Models;

use Model;
use Form;
/**
 * Model
 */
class District extends Model
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
    public $table = 'numthang_location_districts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected static $nameList = null;

    public static function getNameList($amphureId)
    {
      if (isset(self::$nameList[$amphureId])) {
          return self::$nameList[$amphureId];
      }

      return self::$nameList[$amphureId] = self::whereAmphureId($amphureId)->lists('name_th', 'id');
    }

    public static function formSelect($name, $amphureId = null, $selectedValue = null, $options = [])
    {
        return Form::select($name, self::getNameList($amphureId), $selectedValue, $options);
    }
    public static function getInfo($id)
    {
      return self::find($id);
    }
}
