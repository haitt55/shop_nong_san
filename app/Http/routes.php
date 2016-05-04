<?php

// Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'admin.auth.getLogin']);
    Route::post('auth/login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'admin.auth.postLogin']);
    Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'admin.auth.getLogout']);

    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin.home.index']);
        Route::get('dashboard', ['uses' => 'HomeController@dashboard', 'as' => 'admin.home.dashboard']);

        Route::get('profile/edit', ['uses' => 'ProfileController@edit', 'as' => 'admin.profile.edit']);
        Route::put('profile/update', ['uses' => 'ProfileController@update', 'as' => 'admin.profile.update']);
        Route::get('profile/editPassword', ['uses' => 'ProfileController@editPassword', 'as' => 'admin.profile.editPassword']);
        Route::put('profile/updatePassword', ['uses' => 'ProfileController@updatePassword', 'as' => 'admin.profile.updatePassword']);

        Route::get('discount', ['uses' => 'DiscountController@discount', 'as' => 'admin.discount.index']);
        Route::put('updateDiscount', ['uses' => 'DiscountController@updateDiscount', 'as' => 'admin.discount.update']);

        Route::resource('users', 'UsersController');
        Route::resource('pages', 'PagesController');
        Route::resource('articles', 'ArticlesController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('news_categories', 'NewsCategoriesController');
        Route::resource('news', 'NewsController');
        Route::resource('products', 'ProductsController');
        Route::resource('product_categories', 'ProductCategoriesController');
        Route::resource('product_articles', 'ProductArticlesController');
        Route::resource('introduces_policies', 'IntroducesPoliciesController');

        Route::post('products/{id}/images', ['uses' => 'ProductImagesController@store', 'as' => 'admin.products.images']);
        Route::post('products/addPhoto', ['uses' => 'ProductsController@addPhoto', 'as' => 'admin.products.addPhoto']);
        Route::post('products/deletePhoto', ['uses' => 'ProductsController@deletePhoto', 'as' => 'admin.products.deletePhoto']);
        Route::post('articles/{id}/images', ['uses' => 'ArticleImagesController@store', 'as' => 'admin.articles.images']);
        Route::post('articles/addPhoto', ['uses' => 'ArticlesController@addPhoto', 'as' => 'admin.articles.addPhoto']);
        Route::post('articles/deletePhoto', ['uses' => 'ArticlesController@deletePhoto', 'as' => 'admin.articles.deletePhoto']);
        Route::resource('messages', 'MessagesController', ['only' => ['index', 'show', 'destroy']]);

        Route::get('appSettings/general', ['uses' => 'AppSettingsController@general', 'as' => 'admin.appSettings.general']);
        Route::put('appSettings/general', ['uses' => 'AppSettingsController@updateGeneral', 'as' => 'admin.appSettings.updateGeneral']);
    });
});

// Web
// Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);
Route::get('/', ['uses' => 'Front\HomeController@index', 'as' => 'front.home.index']);
Route::get('/payments', ['uses' => 'Front\HomeController@payment', 'as' => 'front.home.payment']);
Route::get('/preferences', ['uses' => 'Front\HomeController@preference', 'as' => 'front.home.preference']);
Route::get('/promotion', ['uses' => 'Front\HomeController@promotion', 'as' => 'front.home.promotion']);
Route::get('/buy-guide', ['uses' => 'Front\HomeController@buyGuide', 'as' => 'front.home.buy_guide']);
Route::get('/regulation', ['uses' => 'Front\HomeController@regulation', 'as' => 'front.home.regulation']);
Route::get('/delivery', ['uses' => 'Front\HomeController@delivery', 'as' => 'front.home.delivery']);
Route::get('/about', ['uses' => 'Front\HomeController@about', 'as' => 'front.home.about']);
Route::get('/transport', ['uses' => 'Front\HomeController@transport', 'as' => 'front.home.transport']);

Route::get('/products', ['uses' => 'Front\ProductController@index', 'as' => 'front.products.index']);
Route::get('/products/{id}/detail', ['uses' => 'Front\ProductController@getProductDetail', 'as' => 'front.products.detail']);
Route::get('/discount', ['uses' => 'Front\ProductController@getDiscount', 'as' => 'front.products.discount']);

Route::get('/news', ['uses' => 'Front\NewsController@index', 'as' => 'front.news.index']);
Route::get('/news/{id}/detail', ['uses' => 'Front\NewsController@getDetail', 'as' => 'front.news.detail']);



Route::get('articles.html', ['uses' => 'ArticlesController@index', 'as' => 'articles.index']);
Route::get('articles/{slug}.html', ['uses' => 'ArticlesController@show', 'as' => 'articles.show']);
Route::get('{slug}.html', ['uses' => 'PagesController@show', 'as' => 'pages.show']);
Route::post('messages', ['uses' => 'MessagesController@store', 'as' => 'messages.store']);

