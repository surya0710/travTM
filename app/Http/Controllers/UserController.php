<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function accountsetting() {
        $data['getUser']= User::getSingle(Auth::user()->id);
        return view('backend.profile.account-setting',$data);
    }

    public function websetting(){
        $website = WebsiteSetting::first();
        return view('backend.profile.web-settings', compact('website'));
    }

    public function websettingupdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'website_name' => 'required|string',
            'website_email' => 'required|email',
            'website_phone' => 'required|string',
            'website_address' => 'required|string',
            'website_iframe' => 'required|string', // Keeping your original field name
            'website_copyright_text' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if a WebsiteSetting record exists, if not, create a new instance
        $website = WebsiteSetting::firstOrCreate([], []);

        $website->website_name = $request->website_name;
        $website->website_email = $request->website_email;
        $website->website_phone = $request->website_phone;
        $website->website_address = $request->website_address;
        $website->website_map = $request->website_iframe; // Keeping your original field name
        $website->website_copyright_text = $request->website_copyright_text;

        // Handle file uploads
        if ($request->hasFile('website_logo')) {
            $website->website_logo = $this->handleFileUpload($request->file('website_logo'), 'uploads', $website->website_logo);
        }
        
        if ($request->hasFile('website_favicon')) {
            $website->website_favicon = $this->handleFileUpload($request->file('website_favicon'), 'uploads', $website->website_favicon);
        }        

        if($website->save()){
            return redirect()->back()->with('success', 'Website settings updated successfully');
        }
        else{
            return redirect()->back()->with('error', 'Error occurred while updating website settings');
        }
    }

    private function handleFileUpload($file, $folder, $existingFilePath = null)
    {
        if ($existingFilePath) {
            $oldPath = public_path($existingFilePath);
            if (file_exists($oldPath)) {
                unlink($oldPath); // Delete old file
            }
        }

        $uniqueName = md5(time() . rand()) . '.' . $file->getClientOriginalExtension();
        $destinationPath = public_path($folder);
        
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true); // Create folder if not exists
        }

        $file->move($destinationPath, $uniqueName);
        
        return $folder . '/' . $uniqueName;
    }

}

