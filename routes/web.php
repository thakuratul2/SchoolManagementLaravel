<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\ClassSubjectController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ParentController;
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




//middleware
Route::group(['middleware' => 'admin'], function(){
    Route::get('admin-home',[DashboardController::class,'dashboard']);
    Route::get('admin-home/admin/all',[AdminController::class,'list']);
    Route::get('admin-home/admin/new',[AdminController::class,'add']);
    Route::post('admin-home/admin/new',[AdminController::class,'insert']);
    //return view('admin-home.admin.add-admin',[AdminController::class,'list']);
    Route::get('admin-home/admin/edit/{id}',[AdminController::class,'edit']);
    Route::post('admin-home/admin/edit/{id}',[AdminController::class,'update']);
    Route::get('admin-home/admin/delete/{id}',[AdminController::class,'delete']);

    //Class Controller
    Route::get('admin-home/class/all',[ClassController::class,'list']);
    Route::get('admin-home/class/new',[ClassController::class,'add']);
    Route::post('admin-home/class/new',[ClassController::class,'insert']);
    Route::get('admin-home/class/edit/{id}',[ClassController::class,'edit']);
    Route::post('admin-home/class/edit/{id}',[ClassController::class,'update']);
    Route::get('admin-home/class/delete/{id}',[ClassController::class,'delete']);

    //Subject Controller
    Route::get('admin-home/subject/all',[SubjectController::class,'list']);
    Route::get('admin-home/subject/new',[SubjectController::class,'add']);
    Route::post('admin-home/subject/new',[SubjectController::class,'insert']);
    Route::get('admin-home/subject/edit/{id}',[SubjectController::class,'edit']);
    Route::post('admin-home/subject/edit/{id}',[SubjectController::class,'update']);
    Route::get('admin-home/subject/delete/{id}',[SubjectController::class,'delete']);

    //Assign Controller
    Route::get('admin-home/assign/all',[ClassSubjectController::class,'list']);
    Route::get('admin-home/assign/new',[ClassSubjectController::class,'add']);
    Route::post('admin-home/assign/new',[ClassSubjectController::class,'insert']);
    Route::get('admin-home/assign/edit/{id}',[ClassSubjectController::class,'edit']);
    Route::post('admin-home/assign/edit/{id}',[ClassSubjectController::class,'update']);
    Route::get('admin-home/assign/delete/{id}',[ClassSubjectController::class,'delete']);
    Route::get('admin-home/assign/edit_single/{id}',[ClassSubjectController::class,'edit_single']);
    Route::post('admin-home/assign/edit_single/{id}',[ClassSubjectController::class,'update_single']);

    //Change Password Controller

    Route::get('admin-home/change_password',[AuthController::class,'old_password']);
    Route::post('admin-home/change_password',[AuthController::class,'update_password']);

    //Student Section Controller
    Route::get('admin-home/studentDetails/allStudent',[StudentController::class,'view']);
    Route::get('admin-home/studentDetails/add',[StudentController::class,'add']);
    Route::post('admin-home/studentDetails/add',[StudentController::class,'insert']);
    Route::get('admin-home/studentDetails/edit/{id}',[StudentController::class,'edit']);
    Route::post('admin-home/studentDetails/edit/{id}',[StudentController::class,'update']);
    Route::get('admin-home/studentDetails/delete/{id}',[StudentController::class,'delete']);

    //Parent Section Controller
    Route::get('admin-home/parentDetails/allParent',[ParentController::class,'view']);
    Route::get('admin-home/parentDetails/add',[ParentController::class,'add']);
    Route::post('admin-home/parentDetails/add',[ParentController::class,'insert']);
    Route::get('admin-home/parentDetails/edit/{id}',[ParentController::class,'edit']);
    Route::post('admin-home/parentDetails/edit/{id}',[ParentController::class,'update']);
    Route::get('admin-home/parentDetails/delete/{id}',[ParentController::class,'delete']);

});
Route::group(['middleware' => 'teacher'], function(){
    Route::get('admin-home/teacher',[DashboardController::class,'dashboard']);


    Route::get('teacher/change_password',[AuthController::class,'old_password']);
    Route::post('teacher/change_password',[AuthController::class,'update_password']);
    
});
Route::group(['middleware' => 'parent'], function(){
    Route::get('admin-home/parent',[DashboardController::class,'dashboard']);

    Route::get('parent/change_password',[AuthController::class,'old_password']);
    Route::post('parent/change_password',[AuthController::class,'update_password']);
    
});
Route::group(['middleware' => 'student'], function(){
    Route::get('admin-home/student',[DashboardController::class,'dashboard']);

    Route::get('student/change_password',[AuthController::class,'old_password']);
    Route::post('student/change_password',[AuthController::class,'update_password']);
    
});