<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;
    protected $table = 'service';
    static public function getSingle($id) {
        return self::find($id);
    }
    static public function getSingleSlug($slug){
        return self::where('slug','=',$slug)
        ->where('status','=',1)
        ->first();
    }
    static public function getAll() {
        $query= self::select('service.*','category.name as category_name', 'sub_category.name as sub_category_name')
        ->join('category','service.category_id','=','category.id')
        ->leftJoin('sub_category','service.subcategory_id','=','sub_category.id')
        ->paginate(10);
        return $query;
    }
    public function subcategory(){
        return $this->belongsTo(SubCategoryModel::class, "subcategory_id", "id");
    }
    static public function getRecordService($subcatid){
        return self::select('service.*')
        ->where('subcategory_id','=',$subcatid)
        ->where('status','=',1)
        ->get();
    }
}
