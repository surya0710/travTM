<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'blog_category';
    static public function getSingle($id) {
        return self::find($id);
    }

    static public function getList() {
        return self::select('blog_category.*')
        ->orderBy('blog_category.id', 'desc')
        ->paginate(20);
    }
    static public function getBlogCat() {
        return self::select('blog_category.*')
        ->where('status','=','1')
        ->orderBy('blog_category.id', 'desc')
        ->get();
    }

    
}
