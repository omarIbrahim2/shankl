<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class providerable extends Model
{
    use HasFactory;

    protected $fillable = [
        "provider_id",
        "providerable_type",
        "providerable_id",
    ];
}
