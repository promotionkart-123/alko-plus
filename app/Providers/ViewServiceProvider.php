<?php

namespace App\Providers;

use App\Models\BannerSetting;
use App\Models\ContactDetails;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         View::composer('*', function ($view) {
            $view->with(
                'globalBanner',
                Cache::rememberForever('global_banner', function () {
                    return BannerSetting::find(1);
                })
            );
        });
         View::composer('*', function ($view) {
            $view->with(
                'globalContact',
                Cache::rememberForever('global_contact', function () {
                    return ContactDetails::find(1);
                })
            );
        });
    }
}
