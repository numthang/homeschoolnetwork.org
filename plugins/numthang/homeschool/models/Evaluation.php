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
    protected $fillable = ['name', 'part1_1', 'part2_1', 'part2_2', 'part2_3', 'part2_4', 'part2_5', 'table1', 'table2', 'table3', 'table4', 'table5', 'table6', 'course_id', 'graduated', 'degree', 'cover', 'portfolio_id', 'summary'];
    #protected $jsonable = ['portfolios'];

    public $belongsTo = [
        'course' => 'Numthang\Homeschool\Models\Course',
        'post' => ['RainLab\Blog\Models\Post', 'key' => 'id'],
    ];


}
