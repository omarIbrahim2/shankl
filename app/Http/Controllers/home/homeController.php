<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function selectRegisterUser(){
        return view('selectUserRegister');
    }

    public function selectLoginUser(){
        return view('selectUserLogin');
    }
}
