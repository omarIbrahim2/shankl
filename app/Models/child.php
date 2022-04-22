<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    use HasFactory;
      protected $table = 'childs';
    protected $fillable =[
        'name',
        'birth_date',
        'Avatar',
        'age',
        'grade',
        'parentt_id',
    ];


    public function parentt(){
        return $this->belongsTo(parentt::class);
    }
}
