<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::group(['middleware' => ['web', 'auth', 'checkStatus:admin'], 'prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/users', 'UserController');
    Route::resource('/staticpage', 'StaticPageController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/posts', 'PostsController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/settings', 'SettingsController');
    Route::resource('/products', 'ProductController');
});

Route::get('/', 'FrontEndController@index')->name('homepage');
//Route::get('/{category_slug}', 'FrontEndController@category')->name('category.index');
//Route::get('/{cat_slug}/{post_slug}', 'FrontEndController@post')->name('blog.index');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


