<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Str;

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


        request()->validate([
            'email' => 'required|email|unique:users',
            'admission_number' => 'unique:users|min:100|max:500'
        ]);


        $student = new User;

        $student->name = trim($req->name);
        $student->last_name = trim($req->last_name);
        $student->admission_number = trim($req->admission_number);
        $student->roll_number = trim($req->roll_number);
        $student->class_id = trim($req->class_id);
        $student->gender = trim($req->gender);

        if(!empty($req->date_of_birth)){

            $student->date_of_birth = trim($req->date_of_birth);
            
        }

        if(!empty($req->file('profile_pic'))){
            $ext = $req->file('profile_pic')->getClientOriginalExtension();
            $file = $req->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(20);
            $fileName = strtolower($randomStr).'.'.$ext;
            $file->move('upload/student_pic/',$fileName);

            $student->profile_pic = $fileName;
        }

        $student->caste = trim($req->caste);
            $student->religion = trim($req->religion);
            $student->mobile_number = trim($req->mobile_number);
            

            if(!empty($req->admission_date)){
                $student->admission_date = trim($req->admission_date);

            }


            $student->blood_group = trim($req->blood_group);
            $student->height = trim($req->height);
            $student->weight = trim($req->weight);
            $student->status = trim($req->status);
            $student->email = trim($req->email);
            $student->password = Hash::make($req->password);
            $student->user_type = 4;

            $student->save();

            return redirect('admin-home/studentDetails/allStudent')->with('success','Student Profile Created!!!');


    }
    
}
