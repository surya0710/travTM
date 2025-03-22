<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ServiceController extends Controller
{
    public function service() {
        $data['getRecord']= ServiceModel::getAll();
        return view('backend.services.list',$data);
    }
    public function get_service(Request $request){
        $sub_cat_id= $request->id;
        $get_service= ServiceModel::getRecordService($sub_cat_id);
        $html= '';
        $html.= '<option value="">Select</option>';
        foreach($get_service as $service){
            $html.= '<option value="'.$service->id.'">'.$service->name.'</option>';
        }
        $json['html']= $html;
        echo json_encode($json);
    }
    public function edit_get_service(Request $request){
        $sub_cat_id= $request->id;
        $serv_id= $request->ser_id;
        $get_service= ServiceModel::getRecordService($sub_cat_id);
        $html= '';
        $html.= '<option value="">Select</option>';
        foreach($get_service as $service){
            $html.= '<option' . ($serv_id == $service->id ? " selected " : "") . 'value="'.$service->id.'">'.$service->name.'</option>';
        }
        $json['html']= $html;
        echo json_encode($json);
    }
    public function add_service() {
        $data['getCat']= CategoryModel::getCategory();
        return view('backend.services.add',$data);
    }
    public function insert_service(Request $request){
        $request->validate([
            'name'=>'required|min:3|unique:service,name',
            'category_id'=> 'required'
        ]);
        $save= new ServiceModel();
        $save->name=$request->name;
        $save->category_id=$request->category_id;
        $save->subcategory_id=$request->sub_category_id;
        $save->title= $request->title;
        $save->name_desc=$request->name_desc;
        $save->color_code= $request->color_code;
        $save->description= $request->description;
        $save->meta_title= $request->meta_title;
        $save->meta_description= $request->meta_description;
        $save->meta_keywords= $request->meta_keywords;
        $save->status= $request->status;
        $slug= Str::slug($request->name);
        $checkslug= ServiceModel::where('slug','=',$slug)->first();
        if(!empty($checkslug)){
            $dbslug=$slug.'-'.$save->id;
        }else{
            $dbslug=$slug;
        }
        $save->slug=$dbslug;
        if($request->hasFile('image')){
            $ext= $request->file('image')->getClientOriginalExtension();
            $file= $request->file('image');
            $filename= $dbslug.'.'.$ext;

            $manager= new ImageManager(new Driver());
            $image= $manager->read($file);
            $image->resize(700,482)
            ->save('upload/services/'.$filename);
            
            $save->image_file= $filename;
        }
        if($request->hasFile('image_small')){
            $ext= $request->file('image_small')->getClientOriginalExtension();
            $file= $request->file('image_small');
            $filename= $dbslug.'-sm.'.$ext;

            $manager= new ImageManager(new Driver());
            $image= $manager->read($file);
            $image->resize(225,225)
            ->save('upload/services/small/'.$filename);

            $save->image_small= $filename;
        }
        $save->save();
        return redirect('panel/service/list')->with('success','Service Added Successfully');
    }
    public function edit_service($id){
        $data['getCat']= CategoryModel::getCategory();
        $data['getRecord']= ServiceModel::getSingle($id);
        return view('backend.services.edit',$data);

    }
    public function update_service(Request $request,$id){
        $request->validate([
            'name'=>'required|min:3|unique:service,name,'.$id,
            'category_id'=> 'required'
            ]);
            $save= ServiceModel::getSingle($id);
            $save->name=$request->name;
            $save->category_id=$request->category_id;
            $save->subcategory_id=$request->sub_category_id;
            $save->title= $request->title;
            $save->name_desc=$request->name_desc;
            $save->color_code= $request->color_code;
            $save->description= $request->description;
            $save->meta_title= $request->meta_title;
            $save->meta_description= $request->meta_description;
            $save->meta_keywords= $request->meta_keywords;
            $save->status= $request->status;
            $save->slug = Str::slug($request->name);
            if($request->hasFile('image')){
                $ext= $request->file('image')->getClientOriginalExtension();
                $file= $request->file('image');
                $filename= $save->slug.'.'.$ext;
                $file->move('upload/services/',$filename);
                $save->image_file= $filename;
            }
            if($request->hasFile('image_small')){
                $ext= $request->file('image_small')->getClientOriginalExtension();
                $file= $request->file('image_small');
                $filename= $save->slug.'-sm.'.$ext;
                $file->move('upload/services/small/',$filename);
                $save->image_small= $filename;
            }
            $save->save();
            return redirect('panel/service/list')->with('success','Service Updated Successfully');
    }
    public function delete_service($id){
        $delete= ServiceModel::getSingle($id);
        $delete->delete();
        return redirect('panel/service/list')->with('success','Service Deleted Successfully');
    }
}
