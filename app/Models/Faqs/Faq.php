<?php

namespace App\Models\Faqs;

use App\Models\BaseModel;
use App\Models\Faqs\Traits\Attribute\FaqAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        FaqAttribute {
            // FaqAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faqs';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    /**
     * The date fields for the model.clear
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 
        'answer', 
        'status'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.faqs.table');
    }
}
