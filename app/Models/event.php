<?php

namespace App\Models;

use App\Model\supplier;
use App\Models\parentt;
use App\Models\teacher;
use App\Models\provider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'startDate',
        'endDate',
        'image',
    ];


    public function parents(){
        return $this->morphedByMany(parentt::class , 'eventable');
    }

    public function providers(){
        return $this->morphedByMany(provider::class , 'eventable');
    }

    public function teachers(){
        return $this->morphedByMany(teacher::class , 'eventable');

    }

    public function suppliers(){
        return $this->morphedByMany(supplier::class , 'eventable');
    }
}
