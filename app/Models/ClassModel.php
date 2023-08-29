<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $table = 'table_class';

    static public function getRecord(){

        $return = ClassModel::select('table_class.*','users.name as created_by_name')->join('users','users.id','table_class.created_by')->orderBy('table_class.cid','desc')->paginate(20);

        return $return;
    }
}
