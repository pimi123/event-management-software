<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Event;
use App\Models\User;
use App\Models\Payment;


use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function event(): BelongesTo 
    {
        return $this->belongesTo(Event::class);
    }
    public function user(): BelongesTo
    {
        return $this->belongesTo(User::class);
    }
    public function payment(): BelongesTo
    {
        return $this->belongesTo(Payment::class);
    }
}
