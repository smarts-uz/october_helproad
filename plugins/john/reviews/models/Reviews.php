<?php namespace John\Reviews\Models;

use Model;

/**
 * Model
 */
class Reviews extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'john_reviews_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
