<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\WorkProcessAttrModel;
use App\Models\WorkProcessModel;
use Illuminate\Http\Request;

class WorkprocessController extends Controller
{
    public function workprocess()
    {
        $data['getRecord'] = WorkProcessModel::getAll();
        return view('backend.workprocess.list', $data);
    }
    public function add_workprocess()
    {
        $data['getCat'] = CategoryModel::getCategory();
        return view('backend.workprocess.add', $data);
    }
    public function insert_workprocess(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'heading' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'sub_category_id' => 'nullable|integer',
            'service' => 'nullable|integer',
            'title' => 'required|array',
            'title.*' => 'required|string',
            'order' => 'required|array',
            'order.*' => 'required|integer',
            'shortdesc' => 'required|array',
            'shortdesc.*' => 'nullable|string',
            'image.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // Create the main work process entry
        $save = new WorkProcessModel();
        $save->title = $request->heading;
        $save->short_description = $request->description;
        $save->cat_id = $request->category_id;
        $save->sub_cat_id = $request->sub_category_id;
        $save->service_id = $request->service;
        $save->save();

        // Loop through each attribute entry and save them
        foreach ($request->input('title') as $index => $title) {
            if ($request->hasFile("image.$index")) {
                $ex = $request->file("image.$index")->getClientOriginalExtension();
                $file = $request->file("image.$index");
                $filename = rand('11111', '99999') . '.' . $ex;
                $file->move(public_path('upload/workprocess'), $filename);
            }


            $save1 = new WorkProcessAttrModel();
            // dd($request->all());
            $save1->work_process_id = $save->id;
            $save1->order_no = $request->input('order')[$index] ?? null;
            $save1->work_process_title = $title;
            $save1->work_process_desc = $request->input('shortdesc')[$index] ?? null;
            $save1->work_process_image = $filename;
            $save1->save();
        }


        return redirect()->back()->with('success', 'Work process and attributes saved successfully.');
    }

    public function edit_workprocess($id)
    {
        $data['getCat'] = CategoryModel::getCategory();
        $data['getRecord'] = WorkProcessModel::getSingle($id);
        $data['getAttr'] = WorkProcessAttrModel::getAttr($id);
        return view('backend.workprocess.edit', $data);
    }

    public function remove_work_attr(Request $request)
    {
        $id = $request->id;

        if ($id != '') {
            $dl = WorkProcessAttrModel::find($id);

            // Check if the attribute exists before trying to delete it
            if ($dl) {
                $dl->delete();
                return response()->json(['success' => 'Attribute deleted successfully.']);
            } else {
                return response()->json(['error' => 'Attribute not found.'], 404);
            }
        }
    }

    public function update_workprocess(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'image.*' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2000'
        ]);

        $save = WorkProcessModel::find($request->id);
        $save->title = $request->heading;
        $save->short_description = $request->description;
        $save->cat_id = $request->category_id;
        $save->sub_cat_id = $request->sub_category_id;
        $save->service_id = $request->service;
        $save->save();

        foreach ($request->input('title') as $index => $title) {
            $filename = null;

            // Handle image upload if a new file is provided
            if ($request->hasFile("image.$index")) {
                $ex = $request->file("image.$index")->getClientOriginalExtension();
                $file = $request->file("image.$index");
                $filename = rand(11111, 99999) . '.' . $ex;
                $file->move(public_path('upload/workprocess'), $filename);
                // dd($request->all());
            }

            // Find existing attribute or create a new one
            $attr = WorkProcessAttrModel::where('work_process_id', $save->id)
                ->where('work_process_title', $title)
                ->first();
            if (!$attr) {
                $attr = new WorkProcessAttrModel();
                $attr->work_process_id = $save->id;
            }

            $attr->order_no = $request->input('order')[$index] ?? null;
            $attr->work_process_title = $title;
            $attr->work_process_desc = $request->input('shortdesc')[$index] ?? null;

            // Retain old image if no new image is provided
            if ($filename) {
                $attr->work_process_image = $filename;
            } elseif (!$attr->exists) {
                $attr->work_process_image = null; // Ensure image is set for new records
            }

            $attr->save();
        }

        return redirect('panel/workprocess/list')->with('success', 'Work process updated successfully');
    }

    public function delete_workprocess($id) {
        $save= WorkProcessModel::find($id);
        $save->delete();
        return redirect()->back()->with('success','Record deleted successfully.');
    }
}
