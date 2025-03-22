<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function blogcategory() {
        $data['getRecord']= BlogCategoryModel::getList();
        return view('backend.blogcategory.list',$data);
    }
    public function add_blogcategory() {
        return view('backend.blogcategory.add');
    }
    public function insert_blogcategory(Request $request){
        Request()->validate([
            'name' => 'required|min:3|unique:blog_category,name',
        ]);
        $save= new BlogCategoryModel();
        $save->name= $request->name;
        $save->status= $request->status;
        $save->slug= Str::slug($request->name);
        $save->save();
        return redirect('panel/blogcategory/list')->with('success','Data Inserted Successfully');
    }
    public function edit_blogcategory($id) {
        $data['getRecord']= BlogCategoryModel::getSingle($id);
        return view('backend.blogcategory.edit',$data);
    }
    public function update_blogcategory(Request $request,$id) {
        Request()->validate([
            'name' => 'required|min:3|unique:blog_category,name,'.$id
            ]);
        $save= BlogCategoryModel::getSingle($id);
        $save->name= $request->name;
        $save->status= $request->status;
        $save->slug= Str::slug($request->name);
        $save->save();
        return redirect('panel/blogcategory/list')->with('success','Data Updated Successfully');
    }
    public function delete_blogcategory($id) {
        $delete= BlogCategoryModel::getSingle($id);
        $delete->delete();
        return redirect('panel/blogcategory/list')->with('success','Data Deleted Successfully');
    }
}
