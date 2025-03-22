<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ClientController extends Controller
{
    public function client(){
        // $data['getRecord'] = DB::table('clients')->paginate(10);
        $data['getRecord'] = ClientModel::paginate(10);
        return view('backend.client.list', $data);
    }
    public function add_client(){
        return view('backend.client.add');
    }

    public function insert_client(Request $request){
        Request()->validate([
            'name' => 'required|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $save = new ClientModel();
        $save->name = $request->name;
        // $image = $request->file('image');
        // $image_name = time() . '.' . $image->extension();
        // $image->move(public_path('uploads'), $image_name);
        // $save->image = $image_name;
        if($request->hasFile('image')){
            $ext= $request->file('image')->getClientOriginalExtension();
            $file= $request->file('image');
            $filename= time().'.'.$ext;

            $manager= new ImageManager(new Driver());
            $image= $manager->read($file);
            $image->resize(width:180)
            ->save('upload/clients/'.$filename);
            
            $save->image= $filename;
        }
        $save->status = $request->status;
        $save->save();
        return redirect('panel/client/list')->with('success', 'Client Added Successfully');
    }

    public function edit_client($id){
        // $data['getRecord'] = DB::table('clients')->where('id', $id)->first();
        $data['getRecord'] = ClientModel::find($id);
        return view('backend.client.edit', $data);
    }

    public function update_client($id, Request $request) {
        $data = ClientModel::find($id);
        Request()->validate([
            'name' => 'required|min:3',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $data->name = $request->name;
        if($request->hasFile('image')){
            $prev_image= $data->image;
            if($prev_image){
                if(file_exists('upload/clients/'.$prev_image)){
                    unlink('upload/clients/'.$prev_image);
                }
            }
            $ext= $request->file('image')->getClientOriginalExtension();
            $file= $request->file('image');
            $filename= time().'.'.$ext;

            $manager= new ImageManager(new Driver());
            $image= $manager->read($file);
            $image->resize(180,100)
            ->save('upload/clients/'.$filename);
            
            $data->image= $filename;
        }
        $data->status = $request->status;
        $data->save();
        return redirect('panel/client/list')->with('success', 'Client Updated Successfully');
    }

    public function delete_client($id){
        $data = ClientModel::find($id);
        $data->delete();
        return redirect('panel/client/list')->with('success', 'Client Deleted Successfully');
    }
}
