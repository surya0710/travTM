<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function accountsetting() {
        $data['getUser']= User::getSingle(Auth::user()->id);
        return view('backend.profile.account-setting',$data);
    }
}
