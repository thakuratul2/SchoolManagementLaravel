<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubjectModel;
use Auth;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //

    public function list(){

        $data['getRecord'] = SubjectModel::getRecord();

        return view('admin-home.subject.all',$data);
    }

    public function add(){

        return view('admin-home.subject.add-subject');
    }

    public function insert(Request $req){

        $save = new SubjectModel;

        $save->name = trim($req->name);
        $save->type = trim($req->type);
        $save->status = trim($req->status);

        $save->created_by = Auth::user()->id;

        $save->save();

        return redirect('admin-home/subject/all')->with('success', 'Subject Created!!!');

    }

}
