<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SubCategoryController extends Controller
{
    public function subcategory(){
        $data['getRecord']= SubCategoryModel::getRecord();
        return view('backend.subcategory.list',$data);
    }
    public function add_subcategory() {
        $data['getCat']= CategoryModel::getCategory();
        return view('backend.subcategory.add',$data);
    }
    public function insert_subcategory(Request $request){
        Request()->validate([
            'name'=> 'required|min:3|unique:sub_category,name',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'image_small' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $save= new SubCategoryModel();
        $save->name= $request->name;
        $save->category_id= $request->category_id;
        $save->title= $request->title;
        $save->color_code= $request->color_code;
        $save->order_no= $request->order_no;
        $save->name_desc= $request->name_desc;
        $save->description= $request->description;
        $save->meta_title= $request->meta_title;
        $save->meta_description= $request->meta_description;
        $save->meta_keywords= $request->meta_keywords;
        $save->status= $request->status;
        $slug= str::slug($request->name);
        $checkslug= SubCategoryModel::where('slug','=',$slug);
        if($checkslug->count()>0){
            $dbslug= $slug.'-'.$save->id;
        }else{
            $dbslug= $slug;
        }
        $save->slug= $dbslug; 
        if($request->hasFile('image')){
            $ext= $request->file('image')->getClientOriginalExtension();
            $file= $request->file('image');
            $filename= $dbslug.'.'.$ext;
            $file->move('upload/subcategory/',$filename);
            $save->image= $filename;
        }
        if($request->hasFile('image_small')){
            $ext= $request->file('image_small')->getClientOriginalExtension();
            $file= $request->file('image_small');
            $filename= $dbslug.'.'.$ext;

            $manager= new ImageManager(new Driver());
            $image= $manager->read($file);
            $image->resize(280,280)
            ->save('upload/subcategory/small/'.$filename);
            
            $save->image_small= $filename;
        }
        $save->save();
        return redirect('panel/subcategory/list')->with('success','Subcategory inserted successfully');
    }
    public function edit_subcategory($id) {
        $data['getSingle']= SubCategoryModel::getSingle($id);
        $data['getCat']= CategoryModel::getCategory();
        return view('backend.subcategory.edit',$data);
    }
    public function update_subcategory(Request $request,$id){
        Request()->validate([
            'name'=> 'required|min:3|unique:sub_category,name,'.$id,
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'image_small' => 'image|mimes:jpeg,png,jpg|max:5000',
            ]);
        $save= SubCategoryModel::getSingle($id);
        $save->name= $request->name;
        $save->slug= $request->slug;
        $save->category_id= $request->category_id;
        $save->title= $request->title;
        $save->color_code= $request->color_code;
        $save->order_no= $request->order_no;
        $save->name_desc= $request->name_desc;
        $save->description= $request->description;
        $save->meta_title= $request->meta_title;
        $save->meta_description= $request->meta_description;
        $save->meta_keywords= $request->meta_keywords;
        $save->status= $request->status;
        if($request->hasFile('image')){
            if(!empty($save->image)){
                unlink('upload/subcategory/'.$save->image);
            }
            $ext= $request->file('image')->getClientOriginalExtension();
            $file= $request->file('image');
            $filename= $save->slug.'.'.$ext;
            $file->move('upload/subcategory/',$filename);
            $save->image= $filename;
        }
        if($request->hasFile('image_small')){
            if(!empty($save->image_small)){
                unlink('upload/subcategory/small/'.$save->image_small);
            }
            $ext= $request->file('image_small')->getClientOriginalExtension();
            $file= $request->file('image_small');
            $filename= $save->slug.'.'.$ext;

            $manager= new ImageManager(new Driver());
            $image= $manager->read($file);
            $image->resize(280,280)
            ->save('upload/subcategory/small/'.$filename);

            $save->image_small= $filename;
        }
        $save->save();
        return redirect('panel/subcategory/list')->with('success','Subcategory updated successfully');
    }
    public function delete_subcategory($id){
        $delete= SubCategoryModel::getSingle($id);
        $delete->delete();
        return redirect('panel/subcategory/list')->with('success','Subcategory deleted successfully');
    }
    public function get_sub_category(Request $request){
        $category_id= $request->id;
        $get_sub_category= SubCategoryModel::getRecordSubCategory($category_id);
        $html= '';
        $html.= '<option value="">Select</option>';
        foreach($get_sub_category as $sub_category){
            $html.= '<option value="'.$sub_category->id.'">'.$sub_category->name.'</option>';
        }
        $json['html']= $html;
        echo json_encode($json);
    }
    public function get_edit_sub_category(Request $request){
        $category_id= $request->id;
        $pg_id= $request->pg_id;
        $get_sub_category= SubCategoryModel::getRecordSubCategory($category_id);
        $html= '';
        $html.= '<option value="">Select</option>';
        foreach($get_sub_category as $sub_category){
            $html .= '<option' . ($pg_id == $sub_category->id ? " selected" : "") . ' value="' . $sub_category->id . '">' . $sub_category->name . '</option>';
        }
        $json['html']= $html;
        echo json_encode($json);
    }
}
