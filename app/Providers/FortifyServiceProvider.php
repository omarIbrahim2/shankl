<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (request()->is('store/child')) {
            Config::set('fortify.guard' , 'parent');
            Config::set('fortify.prefix' , 'parent');
            Config::set('fortify.passwords' , 'parent');
            Config::set('fortify.home' , '/parent');


        }

        if (request()->is('teacher/*')) {
            Config::set('fortify.guard' , 'teacher');
            Config::set('fortify.prefix' , 'teacher');
            Config::set('fortify.passwords' , 'teacher');
            Config::set('fortify.home' , '/teacher');


        }
        if (request()->is('provider/*')) {
            Config::set('fortify.guard' , 'provider');
            Config::set('fortify.prefix' , 'provider');
            Config::set('fortify.passwords' , 'provider');
            Config::set('fortify.home' , '/provider');


        }
        if (request()->is('supplier/*')) {
            Config::set('fortify.guard' , 'supplier');
            Config::set('fortify.prefix' , 'supplier');
            Config::set('fortify.passwords' , 'supplier');
            Config::set('fortify.home' , '/supplier');


        }

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });


        Fortify::loginView(function () {
            if (request()->is('login')) {
                return view('auth.parentt.login');
            }elseif (request()->is('teacher/login')) {
                return view('auth.teacher.login');
            }elseif (request()->is('provider/login')) {
                return view('auth.provider.login');
            }elseif (request()->is('supplier/login')) {
                return view('auth.supplier.login');
            }else {
                 return view('auth.user.login');
            }

        });

        Fortify::registerView(function(){

            if (request()->is('show/register')) {
                return view('auth.parentt.register');
            }elseif (request()->is('teacher/show/register')) {
                return view('auth.teacher.register');
            }elseif (request()->is('provider/show/register')) {
                return view('auth.provider.register');
            }elseif (request()->is('supplier/show/register')) {
                return view('auth.supplier.register');
            }

        });





}
}


// Fortitfy::loginView(function () {
//
//   if (request()->is('parent/*')){
//       return view('auth.parentt.login');
//   }else{
//       return view('auth.user.login');
//   }

// });
