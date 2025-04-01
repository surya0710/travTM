<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = 'blog';
    static public function getSingle($id) {
        return self::find($id);
    }
    static public function getList() {
        return self::select('blog.*','blog_category.name','blog_category.slug as blog_slug')
        ->join('blog_category','blog_category.id','=','blog.category_id')
        ->orderBy('blog.id', 'desc') 
        ->paginate(10);
    }
    static public function getListFront() {
        return self::select('blog.*','blog_category.name','blog_category.slug as blog_slug',DB::raw('count(case when blog_comment.status = 1 then 1 end) + count(case when blog_comment_reply.status = 1 then 1 end) as total_comment_count'))
        ->join('blog_category','blog_category.id','=','blog.category_id')
        ->leftJoin('blog_comment', 'blog_comment.blog_id', '=', 'blog.id')
        ->leftJoin('blog_comment_reply', 'blog_comment.id', '=', 'blog_comment_reply.blog_comment_id')
        ->where('blog.status','=',1)
        ->groupBy(
            'blog.id', 
            'blog.title', 
            'blog.slug', 
            'blog.user', 
            'blog.status', 
            'blog.category_id', 
            'blog.image_file', 
            'blog.description', 
            'blog.views', 
            'blog.meta_keywords', 
            'blog.meta_description', 
            'blog.created_at', 
            'blog.updated_at',
            'blog_category.name',
            'blog_category.slug'
        )
        ->orderBy('blog.id', 'desc') 
        ->paginate(10);
    }
    static public function getBlogBySlug($slug) {
        return self::select('blog.*')
        ->where('blog.slug','=',$slug)
        ->where('status','=',1)
        ->first();
    }
    static public function blogCatWithCount(){
        return self::select('blog_category.name', db::raw('count(blog.id) as blogcount'))
        ->leftJoin('blog_category','blog.category_id','=','blog_category.id')
        ->groupBy('blog.category_id','blog_category.name')
        ->get();
    }

    static public function getRecentPost() {
       return self::select('blog.title','blog.created_at','blog.image_file','blog.slug')
       ->where('status','=',1)
       ->orderBy('created_at', 'desc')
       ->take(5)
       ->get();
    }

    

    public function getTag() {
        return $this->hasMany(BlogTagsModel::class, 'blog_id');
    }
    public function blog_comment(){
        return $this->hasMany(BlogCommentModel::class, 'blog_id', 'id')->where('status',1);
    }
    public function cat_name(){
        return $this->belongsTo(BlogCategoryModel::class, 'category_id', 'id');
    }
    
}
