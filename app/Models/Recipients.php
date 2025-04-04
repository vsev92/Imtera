<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipients extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'fullName',
        'birthday',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
