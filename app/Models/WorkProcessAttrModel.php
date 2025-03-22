<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProcessAttrModel extends Model
{
    use HasFactory;
    protected $table = 'work_process_attr';

    // public function workProcess()
    // {
    //     return $this->belongsTo(WorkProcessModel::class);
    // }
    static public function getAttr($id) {
        return self:: select('work_process_attr.*')
        ->where('work_process_id','=',$id)
        ->get();
    }
    public function process() {
        return $this->belongsTo(WorkProcessModel::class, 'id', 'work_process_id');
    }
}
