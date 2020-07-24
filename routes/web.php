<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::resource('product', 'Admin\ProductController')->except('show');
    Route::resource('portfolio', 'Admin\PortfolioController')->except('show');
    Route::resource('article', 'Admin\ArticleController')->except('show');
});

Route::get('/', 'FrontController@showHome');

Route::get('/shop', 'FrontController@showProduct');

Route::get('/shop/{slug}', 'FrontController@showProductDetail');

Route::get('/portfolio', 'FrontController@showPortfolio');

Route::get('/blog', 'FrontController@showArticle');

Route::get('/blog/{slug}', 'FrontController@showArticleDetail');

Route::get('/contact', function () {
    return view('contact');
});
