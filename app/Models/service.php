<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'desc',
        'image',
    ];



    public function supplier(){
        return $this->belongsTo(service::class);
    }
}