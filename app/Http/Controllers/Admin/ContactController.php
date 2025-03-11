<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactDetail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = ContactDetail::first();
      

        return view('admin.contact.contact', compact('contact'));
    }

    public function create()
{
    return view('admin.contact.create');  // Create the form for adding contact details
}


    public function store(Request $request)
{
    // Validate the input data
    $request->validate([
        'phone' => 'required|string',
        'email' => 'required|email',
        'location' => 'required|string',
    ]);

    // Create a new ContactDetail record
    ContactDetail::create([
        'phone' => $request->phone,
        'email' => $request->email,
        'location' => $request->location,
    ]);

    // Redirect to the contact details page with a success message
    return redirect()->route('admin.contact.index')->with('success', 'New contact details added successfully.');
}


    public function edit()
    {
        $contact = ContactDetail::first();
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'location' => 'nullable|string',
        ]);

        $contact = ContactDetail::first();
        if (!$contact) {
            $contact = new ContactDetail();
        }
        $contact->update($request->only(['phone', 'email', 'location']));

        return redirect()->route('admin.contact.index')->with('success', 'New contact details added successfully.');
    }
}
