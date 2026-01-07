<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CareerEnqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerSettingController;
use App\Http\Controllers\ContactDetailsController;
use App\Http\Controllers\ContactEnqController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/dummy', function () {
    return view('home');
})->name('dummy');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/career', function () {
    return view('career');
})->name('career');
Route::post('/careers-store', [CareerEnqController::class, 'store'])
     ->name('careers.store');

Route::get('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');


Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::view('/settings', 'admin.pages.settingsPage')->name('admin.settings');
    Route::get('/career-enquiry', [CareerEnqController::class, 'index'])->name('admin.career-enquiry');
    Route::view('/category', 'admin.pages.category')->name('admin.category');
    Route::view('/products', 'admin.pages.products')->name('admin.products');
    Route::post('/contact-enquiry-store', [ContactEnqController::class, 'store'])->name('contact.store');
    Route::get('/contact-enquiry', [ContactEnqController::class, 'index'])->name('admin.contact-enquiry');
    
    
    //Settings Page
    Route::get('/profile-setting', [ProfileController::class, 'edit'])->name('admin.profile-setting');
    Route::put('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');

    Route::get('/banner-setting', [BannerSettingController::class, 'index'])->name('admin.banner-setting');
    Route::post('/banner-setting-store', [BannerSettingController::class, 'store'])->name('admin.banner.store');

    Route::get('/contact-setting', [ContactDetailsController::class, 'index'])->name('admin.contact-setting');
    Route::post('/contact-setting-store', [ContactDetailsController::class, 'store'])->name('admin.contact.setting.store');

});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
