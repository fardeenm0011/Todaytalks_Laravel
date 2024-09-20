<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;

use Illuminate\Support\ServiceProvider;

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
        //
        Blade::component('head-vite', \App\View\Components\HeadVite::class);
        Blade::component('head-style', \App\View\Components\HeadStyle::class);
        Blade::component('header', \App\View\Components\Header::class);
        Blade::component('menu', \App\View\Components\Menu::class);
        Blade::component('spotlight', \App\View\Components\Spotlight::class);
        Blade::component('right-sidebar', \App\View\Components\RightSidebar::class);
        Blade::component('footer', \App\View\Components\Footer::class);
    }
}
