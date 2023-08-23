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
        
        $data['getRecord'] = User::getAdmin();
        return view('admin-home.admin.all',$data);
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

    public function edit($id){
        
        $data['setRecord'] = User::getsingle($id);
        if(!empty($data['setRecord'])){
            return view('admin-home.admin.edit',$data);
        }else{
            abort(404);
        }
        
    }

    public function update($id, Request $req){
        $user = User::getsingle($id);
        $user->name  = trim($req->name);
        $user->email = trim($req->email);
        if(!empty($req->password)){
            $user->password = Hash::make($req->password);
        }
        
        
        $user->save();

        return redirect('admin-home/admin/all')->with('success','Admin Updated!!!');
    }

    public function delete($id){

        $user = User::getsingle($id);
        $user->is_deleted = 1;
        $user->save();
        return redirect('admin-home/admin/all')->with('success','Admin Deleted!!!');
    }
}
