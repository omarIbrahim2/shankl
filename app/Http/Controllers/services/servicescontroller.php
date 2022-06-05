<?php

namespace App\Http\Controllers\services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class servicescontroller extends Controller
{
    public function index()
    {
        $loginParent = Auth::guard('parent')->user();
        return view("web.services.services")->with([
            "loginParent" => $loginParent,
        ]);

    }
}
