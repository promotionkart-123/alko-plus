<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactEnqController extends Controller
{
  public function index()
{
    $data = Contact::orderBy('id', 'desc')->paginate(8);
    return view('admin.pages.EnquiryPage', compact('data'));
}


    public function store(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
