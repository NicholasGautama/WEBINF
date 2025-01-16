<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\announcement;

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
        View::composer('layouts.announcement', function ($view) {
            // $announcement = Announcement::where('status', true)->get();
        $announcement = announcement::all();  
            $view->with('announcement', $announcement);
        });
    }
}
