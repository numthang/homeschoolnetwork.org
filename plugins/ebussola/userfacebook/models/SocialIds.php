<?php namespace eBussola\Userfacebook\Models;

use Model;

/**
 * SocialIds Model
 */
class SocialIds extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ebussola_userfacebook_social_ids';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['*'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'user' => ['\RainLab\User\Models\User']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}