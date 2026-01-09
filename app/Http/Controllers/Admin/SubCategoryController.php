<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::latest()->paginate(10);
        return view('admin.pages.products.subCategory', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.products.forms.addSubCategory', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'banner_img'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'category_id', 'description']);

        if ($request->hasFile('banner_img')) {
            $image = $request->file('banner_img');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/sub-categories'), $imageName);
            $data['banner_img'] = '/assets/images/sub-categories/' . $imageName;
        }

        SubCategory::create($data);

        return redirect()
            ->route('admin.sub-category')
            ->with('success', 'Sub Category created successfully');
    }

    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::all();

        return view('admin.pages.products.forms.editSubCategory', compact('subCategory', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'banner_img'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'category_id', 'description']);

        if ($request->hasFile('banner_img')) {

            // delete old image
            if ($subCategory->banner_img && file_exists(public_path($subCategory->banner_img))) {
                unlink(public_path($subCategory->banner_img));
            }

            $image = $request->file('banner_img');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/sub-categories'), $imageName);
            $data['banner_img'] = '/assets/images/sub-categories/' . $imageName;
        }

        $subCategory->update($data);

        return redirect()
            ->route('admin.sub-category')
            ->with('success', 'Sub Category updated successfully');
    }

    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);

        if ($subCategory->banner_img && file_exists(public_path($subCategory->banner_img))) {
            unlink(public_path($subCategory->banner_img));
        }

        $subCategory->delete();

        return redirect()
            ->route('admin.sub-category')
            ->with('success', 'Sub Category deleted successfully');
    }
}
