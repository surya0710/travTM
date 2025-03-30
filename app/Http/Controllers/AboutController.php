<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class AboutController extends Controller
{
    public function index(){
        $pageContent = Pages::where('slug', 'about-us')->first();
        return view('about', compact('pageContent'));
    }
}
