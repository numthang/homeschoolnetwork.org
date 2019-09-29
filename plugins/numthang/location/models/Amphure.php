<?php namespace Numthang\Location\Models;

use Model;
use Form;
/**
 * Model
 */
class Amphure extends Model
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
    public $table = 'numthang_location_amphures';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    protected static $nameList = null;

    public static function getNameList($provinceId)
    {
      if (isset(self::$nameList[$provinceId])) {
          return self::$nameList[$provinceId];
      }

      return self::$nameList[$provinceId] = self::whereProvinceId($provinceId)->lists('name_th', 'id');
    }

    public static function formSelect($name, $provinceId = null, $selectedValue = null, $options = [])
    {
        return Form::select($name, self::getNameList($provinceId), $selectedValue, $options);
    }
}
