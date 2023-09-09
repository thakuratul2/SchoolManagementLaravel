<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    //
    public function view(){
        $data['getParent'] = User::getParent();

        return view('admin-home.parent_details.allParent',$data);
    }

    public function add(){

        return view('admin-home.parent_details.addParent');
    }
}
