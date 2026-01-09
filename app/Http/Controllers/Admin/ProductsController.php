<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::orderby('id','desc')->paginate(10);
        return view('admin.pages.products.products', compact('products'));
    }

    public function show($id)
    {
        $product = Products::find($id);
        return view('admin.pages.products.viewProductDetails', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategory = SubCategory::all();
        return view('admin.pages.products.forms.addProducts', compact('subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'sub_title'     => 'nullable|string|max:255',
            'category_id'   => 'nullable|exists:sub_categories,id',
            'highlight'     => 'nullable|string',
            'description'   => 'nullable|string',
            'specification' => 'nullable|string',
            'application'   => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sub_images.*'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $imageName);
        }

        $subImages = [];
        if ($request->hasFile('sub_images')) {
            foreach ($request->file('sub_images') as $file) {
                $fileName = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/products/subimages'), $fileName);
                $subImages[] = $fileName;
            }
        }

        Products::create([
            'title'         => $request->title,
            'sub_title'     => $request->sub_title,
            'category_id'   => $request->category_id,
            'highlight'     => $request->highlight,
            'description'   => $request->description,
            'specification' => $request->specification,
            'application'   => $request->application,
            'image'         => $imageName,
            'sub_images'    => $subImages,
        ]);

        return redirect()
            ->route('admin.products')
            ->with('success', 'Product created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products::findOrFail($id);
        $subcategory = SubCategory::all();
        return view('admin.pages.products.forms.editProducts', compact('product', 'subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::findOrFail($id);

        $request->validate([
            'title'         => 'required|string|max:255',
            'sub_title'     => 'nullable|string|max:255',
            'category_id'   => 'nullable|exists:sub_categories,id',
            'highlight'     => 'nullable|string',
            'description'   => 'nullable|string',
            'specification' => 'nullable|string',
            'application'   => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sub_images.*'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Update main image if uploaded
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path('assets/images/products/' . $product->image))) {
                unlink(public_path('assets/images/products/' . $product->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $imageName);
            $product->image = $imageName;
        }

        // Update sub-images if uploaded
        if ($request->hasFile('sub_images')) {
            // Remove old sub-images
            if ($product->sub_images && is_array($product->sub_images)) {
                foreach ($product->sub_images as $oldSubImage) {
                    if (file_exists(public_path('assets/images/products/subimages/' . $oldSubImage))) {
                        unlink(public_path('assets/images/products/subimages/' . $oldSubImage));
                    }
                }
            }
            $subImages = [];
            foreach ($request->file('sub_images') as $file) {
                $fileName = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/products/subimages'), $fileName);
                $subImages[] = $fileName;
            }
            $product->sub_images = $subImages;
        }

        // Update other fields
        $product->update([
            'title'         => $request->title,
            'sub_title'     => $request->sub_title,
            'category_id'   => $request->category_id,
            'highlight'     => $request->highlight,
            'description'   => $request->description,
            'specification' => $request->specification,
            'application'   => $request->application,
        ]);

        return redirect()
            ->route('admin.products')
            ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::findOrFail($id);

        // Delete main image
        if ($product->image && file_exists(public_path('assets/images/products/' . $product->image))) {
            unlink(public_path('assets/images/products/' . $product->image));
        }

        // Delete sub-images
        if ($product->sub_images && is_array($product->sub_images)) {
            foreach ($product->sub_images as $subImage) {
                if (file_exists(public_path('assets/images/products/subimages/' . $subImage))) {
                    unlink(public_path('assets/images/products/subimages/' . $subImage));
                }
            }
        }

        $product->delete();

        return redirect()
            ->route('admin.products')
            ->with('success', 'Product deleted successfully!');
    }
}
