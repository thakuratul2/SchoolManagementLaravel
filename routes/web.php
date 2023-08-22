<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
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
    Route::get('forgot-password','forgotpassword');
    Route::post('forgot-password','Postforgotpassword');

});


Route::get('admin-home',function(){

    return view('admin-home.dashboard');
});



//middleware
Route::group(['middleware' => 'admin'], function(){
    Route::get('admin-home',[DashboardController::class,'dashboard']);
    Route::get('admin-home/admin/all',[AdminController::class,'list']);
    Route::get('admin-home/admin/new',[AdminController::class,'add']);
    Route::post('admin-home/admin/new',[AdminController::class,'insert']);
    //return view('admin-home.admin.add-admin',[AdminController::class,'list']);
    Route::get('admin-home/admin/edit/{id}',[AdminController::class,'edit']);
    Route::get('admin-home/admin/delete/{id}',[AdminController::class,'delete']);
});
Route::group(['middleware' => 'teacher'], function(){
    Route::get('admin-home/teacher',[DashboardController::class,'dashboard']);
    
});
Route::group(['middleware' => 'parent'], function(){
    Route::get('admin-home/parent',[DashboardController::class,'dashboard']);
    
});
Route::group(['middleware' => 'student'], function(){
    Route::get('admin-home/student',[DashboardController::class,'dashboard']);
    
});