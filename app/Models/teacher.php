<?php

namespace App\Models;


use App\Models\event;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        "cv",
        "image",
        "field",
        "phone",
        'password',
        'facebook_id',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function events(){
        return $this->morphToMany(event::class , 'eventable');
    }



    public function services()
    {
        return $this->morphMany(Service::class , 'serviceable');
    }

    public function cart()
    {
        return $this->morphOne(Cart::class , 'cartable');
    }

    public function orders()
    {
        return $this->morphMany(Order::class , 'orderable');
    }
}
