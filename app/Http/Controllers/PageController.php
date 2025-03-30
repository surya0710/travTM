<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function pageList(){
        $pages = Pages::where('status',1)->paginate(10);
        return view('backend.pages.list', compact('pages'));
    }

    public function pageAdd(){
        return view('backend.pages.add');
    }

    public function pageStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'slug' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $page = new Pages();
        $page->name = $request->name;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->meta_title = $request->title;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;
        if($request->hasFile('image')){
            $ext = $request->file('image')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('image')->move(public_path('uploads'),$filename);
            $page->image = $filename;
        }
        if($request->hasFile('meta_image')){
            $ext = $request->file('meta_image')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('meta_image')->move(public_path('uploads'),$filename);
            $page->meta_image = $filename;
        }
        $page->status = $request->status;
        $headings = $request->heading;
        $descriptions = $request->description;
        $content = array_map(function($heading, $description){
            return array('heading' => $heading, 'description' => $description);
        }, $headings, $descriptions);

        $page->content = json_encode($content);
        
        if($page->save()){
            return redirect()->route('pageList')->with('success','Page Created Successfully');
        }
        else{
            return redirect()->route('pageList')->with('error','Something went wrong');
        }
    }

    public function pageEdit($id){
        $page = Pages::find($id);
        return view('backend.pages.edit',compact('page'));
    }

    public function pageUpdate(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'slug' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $page = Pages::find($id);
        $page->name = $request->name;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->meta_title = $request->title;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;
        if($request->hasFile('image')){
            $ext = $request->file('image')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('image')->move(public_path('uploads'),$filename);
            $page->image = $filename;
        } else {
            $page->image = '';
        }

        if($request->hasFile('meta_image')){
            $ext = $request->file('meta_image')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('meta_image')->move(public_path('uploads'),$filename);
            $page->meta_image = $filename;
        } else {
            $page->meta_image = '';
        }

        $page->status = $request->status;
        $headings = $request->heading;
        $descriptions = $request->description;
        $content = array_map(function($heading, $description){
            return array('heading' => $heading, 'description' => $description);
        }, $headings, $descriptions);

        $page->content = json_encode($content);
        
        if($page->save()){
            return redirect()->route('pageList')->with('success','Page Updated Successfully');
        }
        else{
            return redirect()->route('pageList')->with('error','Something went wrong');
        }
    }
}


