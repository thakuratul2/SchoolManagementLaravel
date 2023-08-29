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
}
