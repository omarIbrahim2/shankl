<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $gaurded = [
        'id',
        'created_at',
        'updated_at',
     ];

       public function serviceable()
       {
           return $this->morphTo();
       }

       public function category()
      {
          return $this->belongsTo(Category::class);
      }

      public function orders()
      {
          return $this->belongsToMany(Order::class);
      }
}
