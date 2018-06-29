<?php

namespace App\Models\EmailTemplates;

use App\Models\BaseModel;
use App\Models\EmailTemplates\Traits\Attribute\EmailTemplateAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailTemplate extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        EmailTemplateAttribute {
            // EmailTemplateAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'email_templates';

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
     * The guarded field which are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.email_templates.table');
    }
}
