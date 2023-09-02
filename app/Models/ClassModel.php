<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $table = 'table_class';
    protected $primaryKey = 'cid';

    static public function getRecord(){

        $return = ClassModel::select('table_class.*','users.name as created_by_name')->join('users','users.id','table_class.created_by')->where('table_class.is_deleted','=',0)->orderBy('table_class.cid','desc')->paginate(20);

        return $return;
    }

    static public function getSingle($cid){

        return self::find($cid);
    }

    static public function getClass(){

        $return = ClassModel::select('table_class.*')->join('users','users.id','table_class.created_by')->where('table_class.is_deleted','=',0)->where('table_class.status','=',0)->orderBy('table_class.name','asc')->get();


        return $return;
    }
}
