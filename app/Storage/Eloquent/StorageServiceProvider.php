<?php

namespace App\Storage\Eloquent;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Storage\UserRepositoryInterface', function() {
            return new \App\Storage\Eloquent\UserRepository(new \App\Models\User);
        });
        $this->app->bind('App\Storage\PageRepositoryInterface', function() {
            return new \App\Storage\Eloquent\PageRepository(new \App\Models\Page);
        });
        $this->app->bind('App\Storage\ArticleRepositoryInterface', function() {
            return new \App\Storage\Eloquent\ArticleRepository(new \App\Models\Article);
        });
        $this->app->bind('App\Storage\CategoryRepositoryInterface', function() {
            return new \App\Storage\Eloquent\CategoryRepository(new \App\Models\Category);
        });
        $this->app->bind('App\Storage\MessageRepositoryInterface', function() {
            return new \App\Storage\Eloquent\MessageRepository(new \App\Models\Message);
        });
        $this->app->bind('App\Storage\AppSettingRepositoryInterface', function() {
            return new \App\Storage\Eloquent\AppSettingRepository(new \App\Models\AppSetting);
        });
        $this->app->bind('App\Storage\IntroducePolicyRepositoryInterface', function() {
            return new \App\Storage\Eloquent\IntroducePolicyRepository(new \App\Models\IntroducePolicy());
        });
        $this->app->bind('App\Storage\NewsCategoryRepositoryInterface', function() {
            return new \App\Storage\Eloquent\NewsCategoryRepository(new \App\Models\NewsCategory);
        });
        $this->app->bind('App\Storage\NewsRepositoryInterface', function() {
            return new \App\Storage\Eloquent\NewsRepository(new \App\Models\News);
        });
        $this->app->bind('App\Storage\ProductCategoryRepositoryInterface', function() {
            return new \App\Storage\Eloquent\ProductCategoryRepository(new \App\Models\ProductCategory);
        });
        $this->app->bind('App\Storage\ProductRepositoryInterface', function() {
            return new \App\Storage\Eloquent\ProductRepository(new \App\Models\Product);
        });
        $this->app->bind('App\Storage\ProductArticleRepositoryInterface', function() {
            return new \App\Storage\Eloquent\ProductArticleRepository(new \App\Models\ProductArticle);
        });
    }
}
?>