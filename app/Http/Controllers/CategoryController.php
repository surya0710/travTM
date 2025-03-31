<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function category() {
        $data['getRecord']= CategoryModel::getRecord();
        return view('backend.category.list',$data);
    }
    public function add_category() {
        return view('backend.category.add');
    }
    public function insert_category(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|unique:category,name',
            'title' => 'required|string',
            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
            'is_menu' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $save= new CategoryModel();
        if($request->hasFile('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('image')->move(public_path('uploads'),$filename);
            $save->image = $filename;
        }
        else{
            $save->image = null;
        }
        $save->name=$request->name;
        $save->title = $request->title;
        $save->meta_title = $request->meta_title;
        $save->meta_keywords= $request->meta_keywords;
        $save->meta_description = $request->meta_description;
        $save->is_menu = $request->is_menu;
        $save->status = $request->status;
        $slug = Str::slug($request->name);
        $checkSlug= CategoryModel::where('slug','=',$slug)->first();
        if(!empty($checkSlug)){
            $dbslug= $slug.'-'.$save->id;
        }else{
            $dbslug= $slug;
        }
        $save->slug= $dbslug;
        $save->save();
        return redirect('panel/category/list')->with('success','Category Added Successfully');
    }
    public function edit_category($id){
        $data['getRecord']= CategoryModel::getSingle($id);
        return view('backend.category.edit',$data);
    }
    public function update_category($id,Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'title' => 'required|string',
            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
            'is_menu' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $save= CategoryModel::getSingle($id);
        if($request->hasFile('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('image')->move(public_path('uploads'),$filename);
            $save->image = $filename;
        }
        $save->name=$request->name;
        $save->slug= Str::slug($request->name);
        $save->title = $request->title;
        $save->meta_title = $request->meta_title;
        $save->meta_keywords= $request->meta_keywords;
        $save->meta_description = $request->meta_description;
        $save->is_menu = $request->is_menu;
        $save->status = $request->status;
        if($save->save()){
            return redirect('panel/category/list')->with('success','Category Updated Successfully');
        }
        else{
            return redirect()->back()->with('error','Category Not Updated Successfully');
        }
    }
    public function delete_category($id) {
        $delete= CategoryModel::getSingle($id);
        $delete->delete();
        return redirect('panel/category/list')->with('success','Category Deleted Successfully');
    }
    
}
