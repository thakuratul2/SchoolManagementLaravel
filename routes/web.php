<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//auth controller
Route::controller(AuthController::class)->group(function(){

    Route::get('/','login');
    Route::post('login','AuthLogin');
    Route::get('logout','AuthLogout');
});


Route::get('admin-home',function(){

    return view('admin-home.dashboard');
});

Route::get('admin-home/admin/all', function(){
    return view('admin-home.admin.all');
});

//middleware
Route::group(['middleware' => 'admin'], function(){
    Route::get('admin-home',function(){

        return view('admin-home.dashboard');
    });
    
});
Route::group(['middleware' => 'teacher'], function(){
    Route::get('admin-home/teacher',function(){

        return view('admin-home.dashboard');
    });
    
});
Route::group(['middleware' => 'parent'], function(){
    Route::get('admin-home/parent',function(){

        return view('admin-home.dashboard');
    });
    
});
Route::group(['middleware' => 'student'], function(){
    Route::get('admin-home/student',function(){

        return view('admin-home.dashboard');
    });
    
});