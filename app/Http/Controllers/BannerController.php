<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function list(){
        $banners = Banners::paginate(10);
        return view('backend.banner.list',compact('banners'));
    }

    public function add(){
        return view('backend.banner.add');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
           'heading' => 'required|string',
           'description' => 'required|string',
           'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp',
           'status' => 'required',
           'display_page' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $banner = new Banners();
        $banner->heading = $request->heading;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->display_page = $request->display_page;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/banners'), $imageName);
            $banner->image = $imageName;
        }
        if($banner->save()){
            return redirect()->route('bannerList')->with('success','Banner Created Successfully');
        }
        else{
            return redirect()->route('bannerList')->with('error','Something went wrong');
        }
    }

    public function edit($id){
        $banner = Banners::find($id);
        return view('backend.banner.edit',compact('banner'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'heading' => 'required|string',
            'description' => 'required|string',
            'status' => 'required',
            'display_page' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $banner = Banners::find($id);

        $banner->heading = $request->heading;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->display_page = $request->display_page;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/banners'), $imageName);
            $banner->image = $imageName;
        }
        if($banner->save()){
            return redirect()->route('bannerList')->with('success','Banner Updated Successfully');
        }
        else{
            return redirect()->route('bannerList')->with('error','Something went wrong');
        }
    }

    public function Delete($id){
        $banner = Banners::find($id);
        if($banner->exists()){
            $banner->delete();
            return redirect()->route('bannerList')->with('success','Banner Deleted Successfully');
        }
        else{
            return redirect()->route('bannerList')->with('error','Banner Not Found');
        }

    }
}
