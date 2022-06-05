<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $gaurded = [
        'id',
        'created_at',
        'updated_at',
     ];

     public function orderable()
     {
         return $this->morphTo();
     }


     public function services()
      {
          return $this->belongsToMany(Service::class);
      }
}
