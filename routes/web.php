<?php

use App\Http\Controllers\admin\adminController;
use App\Models\Auth\User;
use App\Models\notification;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\auth\google;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\facebook;
use App\Http\Controllers\child\childController;
use App\Http\Controllers\events\eventsController;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\parent\parentController;
use App\Http\Controllers\provider\providerController;
use App\Http\Controllers\supplier\supplierController;
use App\Http\Controllers\teacher\teacherController;
use App\Models\parentt;
use App\Models\provider;
use GuzzleHttp\Middleware;
use phpDocumentor\Reflection\Types\Parent_;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[homeController::class , 'index'])->name('home');
Route::get('/select/register',[homeController::class , 'selectRegisterUser'])->name('selectUserRegister');
Route::get('/select/login', [homeController::class , 'selectLoginUser'])->name('selectUserLogin');



Route::get('/user' , function(){

    $notifications =  notification::all();
    return view("web/user")->with([
        "notifications" => $notifications,
    ]);
});

Route::middleware(['parentMidle'])->group(function(){

    Route::get('/parent' , [parentController::class , 'index'])->name('parent');
    Route::post('/store/child' , [childController::class , 'addChild']);
    Route::get('/add/child/{parent}' , [childController::class , 'index'])->name('newChild');

});








Route::get('/provider' ,[providerController::class , 'index'])->name('provider');

Route::post('parent/register' , [RegisteredUserController::class , 'storeParent']);


Route::post('teacher/register' , [RegisteredUserController::class , 'storeTeacher'])
->middleware(['guest:'.'teacher']);

Route::post('provider/register' , [RegisteredUserController::class , 'storeProvider'])
->middleware(['guest:'.'provider']);

Route::post('supplier/register' , [RegisteredUserController::class , 'storeSupplier'])
->middleware(['guest:'.'supplier']);



Route::middleware(['teacher'])->group(function(){
    Route::get("/teacher" , [teacherController::class , 'index'])->name('teacher');
});

 Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard' ,[adminController::class , 'index'])->name('dashboard');
    Route::get('/dashboard/events' ,[eventsController::class , 'showEvents'])->name('events');

 });





 Route::get('auth/{user}/facebook/redirect' , [facebook::class , 'redirectFacebok']);
 Route::get('auth/facebook/callback' , [facebook::class , 'AuthfacebookCallBack']);
 Route::get('auth/{user}/google/redirect' , [google::class , 'redirectgoogle']);
 Route::get('auth/google/callback' , [google::class , 'AuthGoogleCallBack']);

Route::middleware(['socialUder'])->group(function(){
    Route::get('parent/facebook/restdata' ,[facebook::class , 'ParentdataConfirm'] )->name("parentDatafacebook");

    Route::get('teacher/facebook/restdata' , [facebook::class , 'TeacherdataConfirm'])->name("teacherDatafacebook");

    Route::get('parent/google/restdata' , [google::class , 'ParentdataConfirm'])->name("parentDatagoogle");

    Route::get('teacher/google/restdata' , [google::class , 'TeacherdataConfirm'])->name("teacherDatagoogle");

    Route::post('parent/{social}',[facebook::class , 'compeleteDataParent']);

    Route::post('teacher/{social}',[facebook::class , 'compeleteDataTeacher']);
});

Route::get("/supplier" , [supplierController::class , "index"]);

Route::get('getParents' , function(){
    $provider = provider::find(3);

    $parent = parentt::find(78);

    dd($parent->providers);




});


