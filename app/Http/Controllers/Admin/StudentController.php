<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    //
    public function view(){

        $data['getRecord'] = User::getStudent();

    return view('admin-home.student_details.allStudent',$data);
    }


    public function add(){

        return view('admin-home.student_details.addStudent');
    }
    
}
