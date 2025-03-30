<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\BlogModel;
use App\Models\BlogTagsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function blog(){
        $blogs = BlogModel::where('status',1)->orderBy('id','desc')->paginate(10);
        return view('backend.blog.list',compact('blogs'));
    }
    public function add_blog(){
        $data['getCat']= BlogCategoryModel::getBlogCat();
        return view('backend.blog.add',$data);
    }
    public function insert_blog(Request $request){
        Request()->validate([
            'title' => 'required|min:3|unique:blog,title'
        ]);
        $save= new BlogModel();
        $save->title = $request->title;
        $save->description = $request->description;
        $save->user= Auth::user()->name;
        $save->meta_keywords= $request->meta_keywords;
        $save->meta_description= $request->meta_description;
        $save->status= $request->status;
        $slug= Str::slug($request->title);
        $save->slug= $slug;
        if($request->hasFile('image')){
            $ext= $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image');
            $filename = $slug.'.'.$ext;
            $file->move('upload/blog/',$filename);
            $save->image_file= $filename;            
        }
        $save->save();
        BlogTagsModel::InsertDeleteTag($save->id, $request->tags);
        return redirect('panel/blog/list')->with('success','Blog Added Successfully');
    }
    public function edit_blog($id){
        $data['getCat']= BlogCategoryModel::getBlogCat();
        $data['getRecord']= BlogModel::getSingle($id);
        return view('backend.blog.edit',$data);
    }
    public function update_blog(Request $request,$id){
        Request()->validate([
            'title' => 'required|min:3|unique:blog,title,'.$id
            ]);
            $save= BlogModel::find($id);
            $save->title = $request->title;
            $save->description = $request->description;
            $save->category_id = $request->category_id;
            $save->user= Auth::user()->name;
            $save->meta_keywords= $request->meta_keywords;
            $save->meta_description= $request->meta_description;
            $save->status= $request->status;
            $slug= Str::slug($request->title);
            $save->slug= $slug;
            if($request->hasFile('image')){
                $ext= $request->file('image')->getClientOriginalExtension();
                $file = $request->file('image');    
                $filename = $slug.'.'.$ext;
                $file->move('upload/blog/',$filename);
                $save->image_file= $filename;
            }
            $save->save();
            BlogTagsModel::InsertDeleteTag($save->id, $request->tags);
            return redirect('panel/blog/list')->with('success','Blog Updated Successfully');
    }
    public function delete_blog($id){
        $delete= BlogModel::find($id);
        $delete->delete();
        return redirect('panel/blog/list')->with('success','Blog Deleted Successfully');
    }

}
