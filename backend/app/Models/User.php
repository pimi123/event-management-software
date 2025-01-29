<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use App\Models\Event;
use Appp\Models\Payment;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        'phone',
        'country',
        'language',
        'currency',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function events() :HasMany 
    {
        return $this->hasMany(Event::class , 'organizer_id');

    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class ,'user_id');
    }

    public function Payments(): HasMany 
    {
        return $this->hasMany(Payment::class , "user_id");
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Reviews::class,"user_id");
    }
}
