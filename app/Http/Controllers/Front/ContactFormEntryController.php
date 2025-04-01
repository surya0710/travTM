<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactFormEntry;
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
        
        try {
            Mail::send('emails.contact', [
                'request' => $request->all(),
            ], function ($mail) use ($request) {
                $mail->from('info@3elabs.com', 'Info');
                $mail->subject('New Enquiry');
                $mail->to('suryakantyadav16@gmail.com')->subject($request->subject);
            });

            return redirect()->route('thankyou'); // Redirect to thankyou page if mail is sent
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send email, please try again later.');
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
