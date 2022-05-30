<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class teacherController extends Controller
{
    public function index(){
        $loginTeacher = Auth::guard('teacher')->user();

        return view("web.teacher.teacher")->with([
            'loginTeacher' => $loginTeacher
        ]);
    }
}
