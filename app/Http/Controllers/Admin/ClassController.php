<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use Auth;

class ClassController extends Controller
{
    //
    public function list(){

        $data['getRecord'] = ClassModel::getRecord();
        return view('admin-home.class.all',$data);
    }

    public function add(){

        return view('admin-home.class.add-class');
    }

    public function insert(Request $req){

        $save = new ClassModel;
        $save->name = $req->name;
        $save->status = $req->status;
        $save->created_by = Auth::user()->id;

        $save->save();

        return redirect('admin-home/class/all')->with('success','Class Added!!!');
    }

    public function edit($cid){


        $data['getRecord'] = ClassModel::getSingle($cid);

        if(!empty($data['getRecord'])){
            return view('admin-home.class.edit',$data);
        }else{
            abort(404);
        }

        

    }

    public function update($cid, Request $req){

        $save = ClassModel::getSingle($cid);
        $save->name = $req->name;
        $save->status = $req->status;

        $save->save();

        return redirect('admin-home/class/all')->with('success','Class Updated!!!');

    }

    public function delete($cid){

        
        $save = ClassModel::getSingle($cid);
        $save->is_deleted = 1;

        $save->save();

        return redirect()->back()->with('error','Class Deleted!!!');
    }
}
