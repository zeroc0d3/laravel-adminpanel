<?php

namespace App\Models\Blogs;

use App\Models\BaseModel;
use App\Models\Blogs\Traits\Attribute\BlogAttribute;
use App\Models\Blogs\Traits\Relationship\BlogRelationship;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        BlogAttribute,
        BlogRelationship {
            // BlogAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';

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
        'slug',
        'publish_datetime',
        'content',
        'meta_title',
        'cannonical_link',
        'meta_keywords',
        'meta_description',
        'status',
        'featured_image',
        'created_by',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.blogs.table');
    }
}
