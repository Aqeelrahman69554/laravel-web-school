<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Footer;
use App\Models\Home;
use App\Models\About;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Membagikan data $footer ke semua view visitor secara otomatis
        View::composer('visitor.*', function ($view) {
            $view->with('footer', Footer::first());
            $view->with('home', Home::first());
            // $view->with('about', About::first());
        });
    }
}
