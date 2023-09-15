<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
          $productCategories = Category::all();
          View::share(compact('productCategories'));

         if(Schema::hasTable('products'))
          {
          $products = Product::all();
              View::share('products',$products);
         }

         Paginator::useBootstrapFive();
    }
}
