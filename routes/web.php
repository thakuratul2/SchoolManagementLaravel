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

Route::get('/',[AuthController::class,'login']);

Route::get('admin-home',function(){

    return view('admin-home.dashboard');
});

Route::get('admin-home/admin/all', function(){
    return view('admin-home.admin.all');
});