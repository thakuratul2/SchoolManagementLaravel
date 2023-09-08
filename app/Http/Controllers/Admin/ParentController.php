<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    //
    public function view(){
        $data['getRecord'] = User::getParent();

        return view('admin-home.parent_details.allParent',$data);
    }
}
