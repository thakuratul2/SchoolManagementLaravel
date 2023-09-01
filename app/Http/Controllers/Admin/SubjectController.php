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

    public function edit($sid){


        $data['getRecord'] = SubjectModel::getSingle($sid);

        if(!empty($data['getRecord'])){
            return view('admin-home.subject.edit',$data);
        }else{
            abort(404);
        }

        

    }

    public function update($sid, Request $req){

        $save = SubjectModel::getSingle($sid);
        $save->name = $req->name;
        $save->type = $req->type;
        $save->status = $req->status;

        $save->save();

        return redirect('admin-home/subject/all')->with('success','Subject Updated!!!');

    }

    public function delete($sid){

        
        $save = SubjectModel::getSingle($sid);
        $save->is_delete = 1;

        $save->save();

        return redirect()->back()->with('error','Subject Deleted!!!');
    }

}
