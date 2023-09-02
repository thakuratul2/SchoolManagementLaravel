<?php

namespace App\Http\Controllers\Admin;
use App\Models\SubjectModel;
use App\Models\ClassModel;
use App\Models\ClassSubjectModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassSubjectController extends Controller
{
    //

    public function list(Request $req){

        $data['getRecord'] = ClassSubjectModel::getRecord();

        return view('admin-home.assign.all',$data);
    }

    public function add(Request $req){

        $data['getClass'] = ClassModel::getClass();
        $data['getSubject'] = SubjectModel::getSubject();

        return view('admin-home.assign.add-assign',$data);
    }
}
