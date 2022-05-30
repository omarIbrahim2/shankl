<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('web.main.home');
    }

    public function selectRegisterUser(){
        return view('web.main.selectUserRegister');
    }

    public function selectLoginUser(){
        return view('web.main.selectUserLogin');
    }

    public function selectEduLevel(){
        return view('web.main.eduLevel');
    }
}
