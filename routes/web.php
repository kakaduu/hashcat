<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', 'PagesController@index');
Route::get('/', 'NewsController@index')->name('news');

Route::get('/', 'CategoryController@index')->name('categories');

Route::get('/category/{category}', ['uses' => 'PostsController@category', 'as' => 'category']);

//Route::get('/category/{id}', 'CategoryController@listPostsByID')->name('listPosts')->where('id', '[0-9]+');

Route::resources([
    'posts' => 'PostsController',
    'news' => 'NewsController',
    'categories' => 'CategoryController'
]);

Route::get('profile', 'UserProfileController@show')->middleware('auth')->name('profile.show');
Route::post('profile', 'UserProfileController@update_avatar')->middleware('auth')->name('profile.update');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
