<?php

namespace App\Models\BlogTags;

use App\Models\BaseModel;
use App\Models\BlogTags\Traits\Attribute\BlogTagAttribute;
use App\Models\BlogTags\Traits\Relationship\BlogTagRelationship;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogTag extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        BlogTagAttribute,
        BlogTagRelationship{
            // BlogTagAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_tags';

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
    
    protected $fillable = [
        'name', 
        'status', 
        'created_by', 
        'updated_by'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.blog_tags.table');
    }
}
