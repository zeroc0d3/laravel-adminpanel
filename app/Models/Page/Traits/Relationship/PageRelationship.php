<?php

namespace App\Models\Page\Traits\Relationship;

use App\Models\Access\User\User;

trait PageRelationship
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
