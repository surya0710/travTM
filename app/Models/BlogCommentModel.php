<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentModel extends Model
{
    use HasFactory;
    protected $table = 'blog_comment';
    protected $fillable = ['name', 'email', 'comment', 'blogid'];

    static public function getComment() {
        return self::select('blog_comment.*')
        ->join('blog', 'blog.id', '=', 'blog_comment.blog_id')
        ->get();
    }
    static public function getCommentWithId($id) {
        return self::select('blog_comment.*')
        ->where('blog_comment.blog_id','=',$id)
        ->get();
    }


    public function commentBelongto() {
        return $this->belongsTo(BlogModel::class, 'blog_id','id')->select('id','title');
    }
    public function blog_comment_reply() {
        return $this->hasMany(BlogCommentReply::class,'blog_comment_id');
    }
}
