<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Models\Ticket;
use App\Models\Payment;


class Event extends Model
{

    use HasFactory;

    protected $fillable = [
        'organizer_id', 'title', 'description', 'date', 'location', 'category', 'status'
    ];

    public function user (): BelongsTo 
    {

        return $this->belongsTo(User::class);
    }

    public function tickets (): HasMany
    {
        return $this->belongsTo(Ticket::class , 'event_id');
    }

    public function payments(): HasMany
    {

        return $this->hasMany(Payment::class , 'event_id');
    }
}
