<?php

namespace App\Http\Controllers\Auth;
use Hash;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(){

        if(!empty(Auth::check())){
            if(Auth::user()->user_type == 1){

                return redirect('admin-home');

            }else if(Auth::user()->user_type == 2){

                return redirect('admin-home/teacher');

            }else if(Auth::user()->user_type == 3){

                return redirect('admin-home/parent');

            }else if(Auth::user()->user_type == 4){

                return redirect('admin-home/student');
                
            }
        }

        return view('Auth.login');
    }

    public function AuthLogin(Request $req){

        $remember = !empty($req ->remember) ? true :false;
        if(Auth::attempt(['email' => $req->email,'password'=> $req->password], $remember)){

            if(Auth::user()->user_type == 1){
                return redirect('admin-home');
            }else if(Auth::user()->user_type == 2){
                return redirect('admin-home/teacher');
            }else if(Auth::user()->user_type == 3){
                return redirect('admin-home/parent');
            }else if(Auth::user()->user_type == 4){
                return redirect('admin-home/student');
            }
            
        }else{

            return redirect()->back()->with('error','Wrong Email and Password!!!');
        }
    }

    public function AuthLogout(){

        Auth::logout();
        return redirect(url(''));
    }
}
