<?php

namespace App\Providers;

use App\Models\CategoryModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        // Share categories with all views
        view()->composer('*', function ($view) {
            $categories = CategoryModel::with('subcategories')->get();
            $view->with('categories', $categories);
        });
        Paginator::useBootstrapFour(); 
    }
}
