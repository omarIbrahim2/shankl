<?php

namespace App\Http\Controllers\auth;

use App\Models\parentt;
use App\Models\teacher;
use App\Models\socialUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Null_;
use Laravel\Socialite\Two\FacebookProvider;
use phpDocumentor\Reflection\Types\Parent_;

class facebook extends Controller
{

     public function ParentdataConfirm(){
        return view('auth.parentt.facebook');
     }

     public function TeacherdataConfirm(){
         return view ('auth.teacher.facebook');
     }

    public function redirectFacebok($user){
         session(["social_user"=>$user]);
        return Socialite::driver('facebook')->redirect();
    }


    public function AuthfacebookCallBack(){


        $user = Socialite::driver('facebook')->user();

       $social_user = socialUser::create([
           'name' => $user->name,
           'email'=>$user->email,
           'password'=>Hash::make('social123456'),
           'social_id'=>$user->id,
        ]);

        if (session('social_user') == 'parent') {
           $parentUser = parentt::where("facebook_id" , $user->id)->first();
           if (!$parentUser) {
            Auth::guard('social_user')->login($social_user);
            return redirect()->route('parentDatafacebook');
           }else{

               $social_user->delete();
                Auth::guard('parent')->login($parentUser);
               return redirect()->route('parent');
           }
        }elseif (session('social_user') == 'teacher') {
            $teacherUser = teacher::where("facebook_id" , $user->id)->first();
            if (!$teacherUser) {
                Auth::guard('social_user')->login($social_user);
                return redirect()->route('teacherDatafacebook');
            }else{
                $social_user->delete();
                Auth::guard('teacher')->login($teacherUser);
                return redirect()->route('teacher');
            }
        }

        }












        public function compeleteDataParent(Request $request , $social){
             $socialUser =  socialUser::first();

             Validator::make($request->all(), [
                'phone' => ['required', 'string', 'max:8'],

            ])->validate();

            $parentUser = parentt::create([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password'=>$socialUser->password,
                "{$social}_id"=>$socialUser->social_id,
                'phone'=>$request->phone,
             ]);
             Auth::guard('social_user')->logout();
             $socialUser->delete();
             Auth::guard('parent')->login($parentUser);
             return redirect()->route('parent');



        }


        public function compeleteDataTeacher(Request $request , $social){
            $socialUser =  socialUser::first();


            Validator::make($request->all(), [
                'phone' => ['required', 'string', 'max:8'],
                'field' =>['required' , 'string'],

            ])->validate();


            $teacherUser = teacher::create([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password'=>$socialUser->password,
                "{$social}_id"=>$socialUser->social_id,
                'phone'=>$request->phone,
                'field'=>$request->field,
             ]);
             Auth::guard('social_user')->logout();
             $socialUser->delete();
             Auth::guard('teacher')->login($teacherUser);
             return redirect()->route('teacher');
        }
    }





















