<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProcessModel extends Model
{
    use HasFactory;
    protected $table = 'work_process';
    // protected $fillable = ['title', 'description'];

    static public function getSingle($id){
        return self::find($id);
    }
    

    static public function getAll() {
        return self::select('work_process.*','category.name as cat_name','sub_category.name as sub_cat_name','service.name as service_name')
        ->leftjoin('category', 'category.id','=','work_process.cat_id')
        ->leftjoin('sub_category','sub_category.id','=','work_process.sub_cat_id')
        ->leftjoin('service','service.id','=','work_process.service_id')
        ->paginate(15);
    }

    // public function attributes()
    // {
    //     return $this->hasMany(WorkProcessAttrModel::class);
    // }
    public function process() {
        return $this->belongsTo(SubCategoryModel::class, 'id', 'sub_cat_id');
    }
    public function processattr() {
        return $this->hasMany(WorkProcessAttrModel::class, 'work_process_id', 'id');
    }
}
