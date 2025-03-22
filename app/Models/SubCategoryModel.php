<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'sub_category';
    static public function getSingle($id) {
        return self::find($id);
    }

    static public function getSingleSlug($slug){
        return self::where('slug','=',$slug)
        ->where('status','=',1)
        ->first();
    }
    static public function getRecord() {
        return self::select('sub_category.*','category.name as catname')
        ->join('category', 'sub_category.category_id', '=', 'category.id')
        ->where('sub_category.status','=',1)
        ->paginate(20);
    }
    static public function getRecordSubCategory($category_id){
        return self::select('sub_category.*')
        ->where('sub_category.category_id','=',$category_id)
        ->where('sub_category.status','=',1)
        ->get();
    }

    public function services(){
        return $this->hasMany(ServiceModel::class, "subcategory_id", "id");
    } 

    public function category(){
        return $this->belongsTo(CategoryModel::class, "category_id", "id");
    }
    public function getProcess() {
        return $this->hasMany(WorkprocessModel::class, 'sub_cat_id', 'id');
    }
}
