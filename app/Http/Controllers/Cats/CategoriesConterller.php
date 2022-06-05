<?php

namespace App\Http\Controllers\Cats;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoriesConterller extends Controller
{
    public function index()
    {
        $cats = Category::get();
        $loginParent = Auth::guard('parent')->user();
        return view("web.cats.cats")->with([
            'cats' => $cats,
            'loginParent' => $loginParent
        ]);
    }
}
