<?php

namespace App\Providers;

use App\Models\BlogModel;
use Illuminate\Support\ServiceProvider;
use App\Models\CategoryModel;
use App\Models\ContactModel;
use App\Models\ServiceModel;

class ViewProvider extends ServiceProvider
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
        view()->composer('*', function ($view) {
            $menu = CategoryModel::where(['is_menu'=> 1, 'status' => 1])->with('subcategories')->get();
            $blogCount = BlogModel::where('status', 1)->count();
            $serviceCount = ServiceModel::where('status', 1)->count();
            $queryCount = ContactModel::all()->count();
            $view->with('serviceCount', $serviceCount);
            $view->with('blogCount', $blogCount);
            $view->with('queryCount', $queryCount);
            $view->with('menu', $menu);
        });
    }
}
