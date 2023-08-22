<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function list(){
        
    
        return view('admin-home.admin.all');
    }

    public function add(){

        return view('admin-home.admin.add-admin');
    }

    public function insert(Request $req){

        $user = new User;
        $user->name  = trim($req->name);
        $user->email = trim($req->email);
        $user->password = Hash::make($req->password);
        $user->user_type = 1;
        $user->save();

        return redirect('admin-home/admin/all')->with('success','Admin Created!!!');
    }
}
