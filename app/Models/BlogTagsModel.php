<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogTagsModel extends Model
{
    use HasFactory;
    protected $table = 'blog_tags';

    static public function InsertDeleteTag($blog_id, $tags) {
        self::where('blog_id','=',$blog_id)->delete();
        if(!empty($tags)){                                                 
            $tags_array= explode(",",$tags);
            foreach($tags_array as $tag){
                $save = new BlogTagsModel;
                $save->blog_id= $blog_id;
                $save->name= trim($tag);
                $save->slug= Str::slug($tag);
                $save->save();
            }
        }
    }
    public function getBlogId() {
        return $this->belongsTo(BlogModel::class, 'id');
    }
}
