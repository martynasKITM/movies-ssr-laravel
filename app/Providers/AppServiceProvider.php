<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
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
        view()->composer('moviesTemplate._partials.sidebar',function($view){
            $view->with('categoriesList',Category::all());
        });
    }
}
