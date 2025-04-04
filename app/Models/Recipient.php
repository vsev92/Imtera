<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipient extends Model
{
    use HasFactory;

    protected $fillable = ['owner_id', 'phone', 'email', 'fullName', 'birthday'];

    public function owner(): BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'owner_id');
    }
}
