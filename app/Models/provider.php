<?php

namespace App\Models;

use App\Models\event;
use App\Models\parentt;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;





class provider extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        "area",
        "seats",
        "type",
        "installments",
        "seat_price",
        "educational_system",
        'password',
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


    public function parents(){
        return $this->morphedByMany(parentt::class , 'providerable');
    }

    public function events(){
        return $this->morphToMany(event::class , 'eventable');
    }

    public function scopelessthanOrEqual($query , $installments){
        return $query->where('installments' , '<=' , $installments);
    }
}
