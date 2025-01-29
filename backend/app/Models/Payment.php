<?php

namespace App\Models;

use App\Mode\Users;
use App\Model\Event;
use App\Model\Ticket;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

  use HasFactory; 
  
   public function user() : BelongsTo {

    return $this->belongsTo(User::class);
    
   }
   public function event(): BelongsTo 
   {
    return $this->belongsTo(Event::class);
   }
   public function ticket(): HasOne 
   {
    return $this->hasOne(Ticket::class);
  }
}
