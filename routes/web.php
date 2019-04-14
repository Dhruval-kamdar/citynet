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

Route::get('/', function () {
    return Redirect::to('front');
    // return Redirect::to('login');
});

Route::match(['get', 'post'], 'front', ['as' => 'login', 'uses' => 'FrontController@index']);
Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'LoginController@auth']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);
Route::match(['get', 'post'], 'blog', ['as' => 'blog', 'uses' => 'BlogController@blog']);
Route::match(['get', 'post'], 'blog-detail/{id}', ['as' => 'blog-detail', 'uses' => 'BlogController@blog_details']);

$userPrefix = "";
Route::group(['prefix' => $userPrefix, 'middleware' => ['auth']], function() {
Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'UserController@dashboard']);
});



$adminPrefix = "admin";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
	Route::match(['get', 'post'], 'admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'Admin\AdminController@dashboard']);
	Route::match(['get', 'post'], 'list-blog', ['as' => 'list-blog', 'uses' => 'Admin\BlogController@index']);
    Route::match(['get', 'post'], 'blog-ajaxAction', ['as' => 'ajaxAction', 'uses' => 'Admin\BlogController@ajaxAction']);
    Route::match(['get', 'post'], 'add-blog', ['as' => 'add-blog', 'uses' => 'Admin\BlogController@add']);
    Route::match(['get', 'post'], 'edit-blog/{id}', ['as' => 'edit-blog', 'uses' => 'Admin\BlogController@edit']);
});