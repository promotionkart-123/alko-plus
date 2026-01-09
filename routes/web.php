<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CareerEnqController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ProductsEnquiryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerSettingController;
use App\Http\Controllers\ContactDetailsController;
use App\Http\Controllers\ContactEnqController;
use App\Http\Controllers\HomeProductsController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Models\ProductEnquiry;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/home-view', function () {
    return view('index2');
})->name('home_new');
Route::get('/dummy', function () {
    return view('home');
})->name('dummy');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/products', [HomeProductsController::class, 'index'])->name('products');
Route::get('/products/{id}', [HomeProductsController::class, 'show'])->name('show.products');
Route::get('/product-detail/{id}', [HomeProductsController::class, 'showDetails'])->name('show.product-details');

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


Route::post('/contact-enquiry-store', [ContactEnqController::class, 'store'])->name('contact.store');
Route::get('/career-enquiry', [CareerEnqController::class, 'index'])->name('admin.career-enquiry');
Route::get('/product-enquiry-form', [ProductsEnquiryController::class, 'create'])->name('product-enquiry-form');
Route::post('/product-enquiry-store', [ProductsEnquiryController::class, 'store'])->name('admin.product-enquiry-store');



Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::view('/settings', 'admin.pages.settingsPage')->name('admin.settings');

    Route::get('/contact-enquiry', [ContactEnqController::class, 'create'])->name('admin.contact-enquiry');
    Route::get('/product-enquiry', [ProductsEnquiryController::class, 'index'])->name('admin.product-enquiry');
    Route::get('/product-enquiry-details/{id}', [ProductsEnquiryController::class, 'show'])->name('admin.product-enquiries.show');

    Route::get('/product-enquiry-form', [ProductsEnquiryController::class, 'index'])->name('admin.product-enquiry');

    //Settings Page
    Route::get('/profile-setting', [ProfileController::class, 'edit'])->name('admin.profile-setting');
    Route::put('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');

    Route::get('/banner-setting', [BannerSettingController::class, 'index'])->name('admin.banner-setting');
    Route::post('/banner-setting-store', [BannerSettingController::class, 'store'])->name('admin.banner.store');

    Route::get('/contact-setting', [ContactDetailsController::class, 'index'])->name('admin.contact-setting');
    Route::post('/contact-setting-store', [ContactDetailsController::class, 'store'])->name('admin.contact.setting.store');

    // Products Section

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/category-form', [CategoryController::class, 'create'])->name('admin.store-category');
    Route::post('/category-store', [CategoryController::class, 'store'])->name(name: 'admin.category.store');
    Route::get('/category-edit-form/{id}', [CategoryController::class, 'edit'])->name('admin.edit-category');
    Route::put('/category-update/{id}', [CategoryController::class, 'update'])->name('admin.update-category');
    Route::delete('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('admin.destroy-category');


    Route::get('/products', [ProductsController::class, 'index'])->name('admin.products');
    Route::get('/products-form', [ProductsController::class, 'create'])->name('admin.add-products');
    Route::post('/products-store', [ProductsController::class, 'store'])->name('admin.store-products');
    Route::get('/product-details/{id}', [ProductsController::class, 'show'])->name('admin.show-products-details');
    Route::get('/products-edit/{id}', [ProductsController::class, 'edit'])->name('admin.edit-products');
    Route::put('/products-update/{id}', [ProductsController::class, 'update'])->name('admin.update-products');
    Route::delete('/products-delete/{id}', [ProductsController::class, 'destroy'])->name('admin.delete-products');

    Route::get('/sub-category', [SubCategoryController::class, 'index'])
        ->name('admin.sub-category');

    Route::get('/sub-category-form', [SubCategoryController::class, 'create'])
        ->name('admin.add-sub-category');

    Route::post('/sub-category-store', [SubCategoryController::class, 'store'])
        ->name('admin.store-sub-category');

    Route::get('/sub-category-edit/{id}', [SubCategoryController::class, 'edit'])
        ->name('admin.edit-sub-category');

    Route::put('/sub-category-update/{id}', [SubCategoryController::class, 'update'])
        ->name('admin.update-sub-category');

    Route::delete('/sub-category-delete/{id}', [SubCategoryController::class, 'destroy'])
        ->name('admin.delete-sub-category');


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
