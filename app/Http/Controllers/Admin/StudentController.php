<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    //
    public function view(){

        $data['getRecord'] = User::getStudent();

    return view('admin-home.student_details.allStudent',$data);
    }


    public function add(){

        $data['getClass'] = ClassModel::getClass();

        return view('admin-home.student_details.addStudent',$data);
    }

    public function insert(Request $req){

        $student = new User;

        $student->name = trim($req->name);
        $student->last_name = trim($req->last_name);
        $student->admission_number = trim($req->admission_number);
        $student->roll_number = trim($req->roll_number);
        $student->class_id = trim($req->class_id);
        $student->gender = trim($req->gender);

        if(!empty($req->date_of_birth)){

            $student->date_of_birth = trim($req->date_of_birth);
            $student->caste = trim($req->caste);
            $student->religion = trim($req->religion);
            $student->mobile_number = trim($req->mobile_number);
            $student->admission_date = trim($req->admission_date);
            $student->blood_group = trim($req->blood_group);
            $student->height = trim($req->height);
            $student->weight = trim($req->weight);
            $student->status = trim($req->status);
            $student->email = trim($req->email);
            $student->password = Hash::make($req->password);

            $student->save();

            return redirect('admin-home/studentDetails/allStudent')->with('success','Student Profile Created!!!');
        }


    }
    
}
