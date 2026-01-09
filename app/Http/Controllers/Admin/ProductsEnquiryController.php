<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductEnquiry;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch enquiries with product info, latest first
        $enquiries = ProductEnquiry::with('product')->latest()->paginate(15);

        return view('admin.pages.productEnquiry', compact('enquiries'));
    }

    public function create()
    {
        return view('productEnquiryForm');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $enquiry = ProductEnquiry::with('product')->findOrFail($id);

        return view('admin.pages.productEnquiryDetails', compact('enquiry'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $enquiry = ProductEnquiry::findOrFail($id);
        $enquiry->delete();

        return redirect()->route('admin.product-enquiries.index')
                         ->with('success', 'Product enquiry deleted successfully.');
    }

    /**
     * Optional: Store method if you want to accept enquiries from a frontend form.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'nullable|string|max:20',
            'product_id'  => 'nullable|exists:products,id',
            'company_name'=> 'nullable|string|max:255',
            'address'     => 'nullable|string|max:255',
            'city'        => 'nullable|string|max:255',
            'state'       => 'nullable|string|max:255',
            'zip_code'    => 'nullable|string|max:20',
            'query'       => 'required|string',
        ]);

        ProductEnquiry::create($validated);

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully.');
    }
}
