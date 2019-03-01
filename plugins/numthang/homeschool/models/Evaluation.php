<?php namespace Numthang\Homeschool\Models;

use Model;

/**
 * Model
 */
class Evaluation extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'numthang_homeschool_evaluations';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    protected $fillable = ['name', 'learning', 'summary', 'successful', 'problem', 'class_reason', 'next', 'suggestion', 'footprint', 'course_id'];
    public $belongsTo = [
        'course' => 'Numthang\Homeschool\Models\Course'

    ];

}
