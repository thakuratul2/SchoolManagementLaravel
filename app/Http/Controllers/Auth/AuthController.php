<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Auth;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;

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

    public function forgotpassword(){

        return view('Auth.forgot');
    }

    public function Postforgotpassword(Request $req){

        $getEmailSingle = User::getEmailSingle($req->email);

        if(!empty($user)){

            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success','Password Change!!!');

        }else{
            return redirect()->back()->with('error','Wrong Email!!!');
        }
    }
    public function AuthLogout(){

        Auth::logout();
        return redirect(url(''));
    }

    public function old_password(){

        return view('admin-home.change_password.password');
    }

    public function update_password(Request $req){

        $user = User::getsingle(Auth::user()->id);

        if(Hash::check($req->old_password, $user->password)){
            $user->password = Hash::make($req->new_password);
            $user->save();

            return redirect()->back()->with('success','Password Changed!!!');

        }else{
            return redirect()->back()->with('error','Password not change!!!');
        }

    }
}
