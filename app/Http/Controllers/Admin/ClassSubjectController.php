<?php

namespace App\Http\Controllers\Admin;
use App\Models\SubjectModel;
use App\Models\ClassModel;
use App\Models\ClassSubjectModel;

use App\Http\Controllers\Controller;
use Auth;
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

    public function insert(Request $req){

        if(!empty($req->subject_id)){

            foreach($req->subject_id as $subject_id)
            {

                $countAlready = ClassSubjectModel::countAlready($req->class_id,$subject_id);
                
                if(!empty($countAlready)){

                    $countAlready->status = $req->status;
                    $countAlready->save();
                }else{
                    $save = new ClassSubjectModel;
                    $save->class_id = $req->class_id;
                    $save->subject_id = $subject_id;
                    $save->status = $req->status;
                    $save->created_by = Auth::user()->id;
    
                    $save->save();
                }


                
            }
            
            return redirect('admin-home/assign/all')->with('success','Subject Successfully Assign to Class!!!');
        }
        else{
            return redirect()->back()->with('error','Something went wrong!!!');
        }
    }

    public function delete($csid){
        $save = ClassSubjectModel::getSingle($csid);
        $save->is_delete = 1;

        $save->save();

        return redirect()->back()->with('error','Assign Deleted!!!');
    }

    public function edit($csid){

        $getRecord = ClassSubjectModel::getSingle($csid);
        
        if(!empty($getRecord)){

            $data['getRecord'] = $getRecord;
            $data['getAssignSubject'] = ClassSubjectModel::getAssignSubject($getRecord->class_id);

            $data['getClass'] = ClassModel::getClass();
        $data['getSubject'] = SubjectModel::getSubject();
        return view('admin-home.assign.edit',$data);
        }else{

            abort(404);
        }
        
    }

    public function update(Request $req){
        ClassSubjectModel::deleteSubject($req->class_id);
        if(!empty($req->subject_id)){

            foreach($req->subject_id as $subject_id)
            {

                $countAlready = ClassSubjectModel::countAlready($req->class_id,$subject_id);
                
                if(!empty($countAlready)){

                    $countAlready->status = $req->status;
                    $countAlready->save();
                }else{
                    $save = new ClassSubjectModel;
                    $save->class_id = $req->class_id;
                    $save->subject_id = $subject_id;
                    $save->status = $req->status;
                    $save->created_by = Auth::user()->id;
    
                    $save->save();
                }


                
            }
            
        }
        return redirect('admin-home/assign/all')->with('success','Update Successfully Subject Assign to Class!!!');

    }

    public function edit_single($csid){
        $getRecord = ClassSubjectModel::getSingle($csid);
        
        if(!empty($getRecord)){

            $data['getRecord'] = $getRecord;
            $data['getAssignSubject'] = ClassSubjectModel::getAssignSubject($getRecord->class_id);

            $data['getClass'] = ClassModel::getClass();
        $data['getSubject'] = SubjectModel::getSubject();
        return view('admin-home.assign.edit_single',$data);
        }else{

            abort(404);
        }
    }

    public function update_single($csid, Request $req){

        $countAlreaady = ClassSubjectModel::countAlready($req->class_id, $req->subject_id);

        if(!empty($countAlreaady)){

            $countAlreaady->status = $req->status;
            $countAlreaady->save();

            return redirect('admin-home/assign/all')->with('success','Status Updated!!!');
        }else{
            $save = ClassSubjectModel::getSingle($csid);
            $save->class_id = $req->class_id;
            $save->subject_id = $req->subject_id;
            $save->status = $req->satus;
            $save->save();

            return redirect('admin-home/assign/all')->with('success','Updated Successfully Subject Assign to Class');

        }
    }
        }
