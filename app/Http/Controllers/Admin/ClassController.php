<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    public function list(){

        return view('admin-home.class.all');
    }

    public function add(Request $req){

        return view('admin-home.class.add-class');
    }
}
