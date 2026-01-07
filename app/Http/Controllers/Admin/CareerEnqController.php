<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerEnqController extends Controller
{
    public function index()
    {
        $career = Career::orderBy('id', 'desc')->paginate(8);
        return view('admin.pages.careerEnquiry', compact('career'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_no' => 'required|string|max:20',
            'applied_position' => 'required|string|max:255',
            'current_designation' => 'nullable|string|max:255',
            'current_organization' => 'nullable|string|max:255',
            'total_experience' => 'nullable|numeric|min:0',
            'expected_salary' => 'nullable|numeric|min:0',
            'highest_qualification' => 'required|string|max:255',
            'file_path' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('file_path')) {
            $validated['file_path'] = $request
                ->file('file_path')
                ->store('career-enq-file', 'public');
        }

        Career::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Application submitted successfully!');
    }
}
