<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Event extends Model
{
    public function User (): BelongsTo 
    {

        return $this->belongsTo(User::class);
    }

}
