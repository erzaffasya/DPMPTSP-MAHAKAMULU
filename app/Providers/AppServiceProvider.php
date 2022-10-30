<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Pengumuman;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share('Menu', Menu::tree()->get()->toTree());
        Paginator::useBootstrapFive();
        View::share('Pengumuman', Pengumuman::latest()->paginate(4));
    }
}
