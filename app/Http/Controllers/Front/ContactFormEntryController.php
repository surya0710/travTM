<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactFormEntry;
use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactFormEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        print_r($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator )->withInput();
        }
        
        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        if($request->has('destination')){
            $query->destination = $request->destination;
        }
        if($request->has('travelDate')){
            $query->travelDate = $request->travelDate;
        }
        if($request->has('travellers')){
            $query->travellers = $request->travellers;
        }
        if($request->has('message')){
            $query->message = $request->message;
        }
        if($query->save()){
            return redirect()->route('thankyou');
        }
        else{
            return redirect()->back()->with('error','Something went wrong');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(ContactFormEntry $contactFormEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactFormEntry $contactFormEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactFormEntry $contactFormEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactFormEntry $contactFormEntry)
    {
        //
    }
}
