<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table= 'category';
    static public function getSingle($id) {
        return self::find($id);
    }
    static public function getSingleSlug($slug){
        return self::where('slug','=',$slug)
        ->where('category.status','=',1)
        ->where('category.is_delete','=',0)
        ->first();
    }
    static public function getRecord() {
        return self::select('category.*')
        ->where('is_delete','=','0')
        ->orderBy('id','desc')
        ->paginate(20);
    }
    static public function getCategory(){
        return self::select('category.id','category.name')
        ->where('is_delete','=','0')
        ->where('status','=',1)
        ->get();
    }
    static public function getRecordMenu(){
        return self::select('category.id','category.name','category.slug')
        ->where('is_delete','=','0')
        ->where('status','=',1)
        ->get();
    }
    public static function getCategoryFront($subcat = null) {
        return self::where('is_delete', 0)
                   ->where('status', 1) 
                   ->with(['subcategories' => function($query) use ($subcat) {
                       $query->where('status', 1);
                       if ($subcat) {
                           $query->where('slug', $subcat);
                       }
                   }, 'subcategories.services' => function($query) {
                       $query->where('status', 1);
                   }])
                   ->get();
    }
    

    public function subcategories(){
        return $this->hasMany(SubCategoryModel::class, "category_id","id")->orderBy('order_no','asc');
    }
    
    public function getSubCategory(){
        return $this->hasMany(SubCategoryModel::class, "category_id")->where('sub_category.status','=',1);
    }
    public function getServiceFront(){
        return $this->hasMany(ServiceModel::class, "subcategory_id",'id')->where('service.status','=',1);
    }
}
