<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Event;




class Notification extends Model
{
    use HasFactory;
    public function user(): HasMany
    {
        return $this->belongsTo(User::class);
    }
    public function event(): HasMany
    {
        return $this->belongsTo(Event::class);
    }
}
