<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.*', 'App\Http\ViewComposers\Admin\GlobalComposer');
        view()->composer('admin.home.dashboard', 'App\Http\ViewComposers\Admin\HomeComposer');
        view()->composer(['admin.articles.create', 'admin.articles.edit'], 'App\Http\ViewComposers\Admin\ArticlesComposer');
        $__products = \App\Models\Product::all();
        view()->share('__products', $__products);
        $__hotNews = \App\Models\News::orderBy('views')->get()->take(10);
        view()->share('__hotNews', $__hotNews);
        $__homeNews = \App\Models\News::orderBy('created_at')->get()->take(5);
        view()->share('__homeNews', $__homeNews);
        $__productDiscounts = \App\Models\Product::where('discount', '!=', 0)->get();
        view()->share('__productDiscounts', $__productDiscounts);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}