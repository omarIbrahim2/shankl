<?php

namespace App\Http\Controllers\auth;

use App\Models\parentt;
use App\Models\teacher;
use App\Models\socialUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Laravel\Socialite\Facades\Socialite;
use phpDocumentor\Reflection\Types\Parent_;

class google extends Controller
{

   public function ParentdataConfirm(){
        return view('auth.parentt.google');
   }


   public function TeacherdataConfirm(){
    return view('auth.teacher.google');
   }



    public function redirectgoogle($user){
        session(["social_user"=>$user]);
        return Socialite::driver('google')->redirect();
    }

    public function AuthGoogleCallBack(){
        $user = Socialite::driver('google')->user();
        $social_user = socialUser::create([
            'name' => $user->name,
            'email'=>$user->email,
            'password'=>Hash::make('social123456'),
            'social_id'=>$user->id,
         ]);


         if (session('social_user') == 'parent') {
            $parentUser = parentt::where("google_id" , $user->id)->first();
            if (!$parentUser) {
             Auth::guard('social_user')->login($social_user);
             return redirect()->route('parentDatagoogle');
            }else{
                $social_user->delete();
                 Auth::guard('parent')->login($parentUser);
                return redirect()->route('parent');
            }
         }elseif (session('social_user') == 'teacher') {
             $teacherUser = teacher::where("google_id" , $user->id)->first();
             if (!$teacherUser) {
                Auth::guard('social_user')->login($social_user);
                 return redirect()->route('teacherDatagoogle');
             }else{
                 $social_user->delete();
                 return Auth::guard('teacher')->login($teacherUser);
                 return redirect()->route('teacher');
             }
    }
}



}
