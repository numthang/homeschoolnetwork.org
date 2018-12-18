<?php namespace Numthang\Homeschool\Models;

use Model;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'numthang_homeschool_courses';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $fillable = ['user_id', 'hs_name', 'name'];//กำหนด field ให้เป็น fillable
    #protected $guarded = [];//ถ้าต้องการให้ fillable ทุก field เลือกอย่างใดอย่างหนึ่งกับ $fillable

}
