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
            return redirect('admin-home');
        }

        return view('Auth.login');
    }

    public function AuthLogin(Request $req){

        $remember = !empty($req ->remember) ? true :false;
        if(Auth::attempt(['email' => $req->email,'password'=> $req->password], $remember)){


            return redirect('admin-home');
        }else{

            return redirect()->back()->with('error','Wrong Email and Password!!!');
        }
    }

    public function AuthLogout(){

        Auth::logout();
        return redirect(url(''));
    }
}
