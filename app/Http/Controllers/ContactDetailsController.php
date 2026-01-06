<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
     public function index()
    {
        $contact = ContactDetails::find(1); 
        return view('admin.pages.settings.contactPage', compact('contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'contact_no' => 'nullable|string|max:20',
            'email'      => 'nullable|email|max:255',
            'address'    => 'nullable|string',
        ]);

        ContactDetails::updateOrCreate(
            ['id' => 1], 
            [
                'contact_no' => $request->contact_no,
                'email'      => $request->email,
                'address'    => $request->address,
            ]
        );

        return redirect()->back()->with('success', 'Contact settings updated successfully.');
    }
}
