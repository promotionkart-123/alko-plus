<?php

namespace App\Http\Controllers;

use App\Models\BannerSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BannerSettingController extends Controller
{
    public function index()
    {
        $banner = BannerSetting::find(1);
        return view('admin.pages.settings.banner', compact('banner'));
    }


   public function store(Request $request)
{
    $request->validate([
        'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $bannerSetting = BannerSetting::find(1);

    if ($request->hasFile('banner')) {
        $file = $request->file('banner');
        $filename = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('banners');

        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }

        $file->move($destinationPath, $filename);
        $path = 'banners/' . $filename;

        // Delete old banner
        if ($bannerSetting && $bannerSetting->banner) {
            $oldPath = public_path($bannerSetting->banner);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
        }

        BannerSetting::updateOrCreate(
            ['id' => 1],
            ['banner' => $path]
        );
    }

    return redirect()->back()->with('success', 'Banner updated successfully.');
}

}
