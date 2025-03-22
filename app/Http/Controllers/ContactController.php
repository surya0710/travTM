<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        $data['getRecord']= ContactModel::getContacts();
        return view('backend.contact.list',$data);
    }
}
