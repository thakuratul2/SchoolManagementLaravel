<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    use HasFactory;

    protected $table = 'table_subject';
    protected $primaryKey = 'sid';


    public static function getRecord(){

        $return = SubjectModel::select('table_subject.*','users.name as created_by_name')->join('users','users.id','table_subject.created_by')->where('table_subject.is_delete','=',0)->orderBy('table_subject.sid','asc')->paginate(20);


        return $return;
    }

    static public function getSingle($sid){

        return self::find($sid);
    }
}
