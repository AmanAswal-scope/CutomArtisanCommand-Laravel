<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; // Import the model you'll be using

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'service' => 'required',
            'salutation' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'country' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Create and save a new Contact model instance
        $contact = new Contact();
        $contact->service = $request->service;
        $contact->salutation = $request->salutation;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->country = $request->country;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
}
