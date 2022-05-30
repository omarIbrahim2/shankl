<?php

namespace App\Http\Controllers\parent;

use App\Models\provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class parentController extends Controller
{
    public function index(){

        $loginParent = Auth::guard('parent')->user();
        return view("web.parent.parent")->with([
            "loginParent" => $loginParent,
        ]);


    }


    public function showEdit(){
        return view('web.parent.parentProfile');
    }

    public function filterSchools(){
        $allSchools = QueryBuilder::for(provider::class)->allowedFilters([
            'area' , 'educational_system' , 'type' , AllowedFilter::scope('lessthanOrEqual')])->get();
          return $allSchools;
    }


}
