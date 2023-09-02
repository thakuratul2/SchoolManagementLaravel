<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class ClassSubjectModel extends Model
{
    use HasFactory;
    protected $table = 'table_class_subject';
    protected $primaryKey = 'csid';

    static public function getRecord(){

        return self::select('table_class_subject.*','table_class.name as class_name','table_subject.name as subject_name','users.name as created_by_name')
                    ->join('table_subject','table_subject.sid','=','table_class_subject.subject_id')
                    ->join('table_class','table_class.cid','=','table_class_subject.class_id')
                    ->join('users','users.id','=','table_class_subject.created_by')
                    ->where('table_class_subject.is_delete','=',0)
                    ->orderBy('table_class_subject.csid','asc')
                    ->paginate(20);
    }

    static function getSingle($csid){

        return self::find($csid);
    }

    static public function countAlready($class_id,$subject_id){

        return self::where('class_id','=',$class_id)->where('subject_id','=',$subject_id)->first();
    }
}
