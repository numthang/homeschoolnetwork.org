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
    protected $fillable = ['name', 'user_id', 'part1_label', 'part1', 'part2_label', 'part2', 'part3_label', 'part3', 'part4_label', 'part4', 'course_id', 'evaluation_date', 'degree', 'cover', 'portfolio_id'];
    #protected $jsonable = ['portfolios'];

    public $belongsTo = [
        'course' => 'Numthang\Homeschool\Models\Course',
        'post' => ['RainLab\Blog\Models\Post', 'key' => 'id'],
    ];


}
