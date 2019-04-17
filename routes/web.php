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
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('/', function () {
    return Redirect::to('home');
    // return Redirect::to('login');
});

Route::match(['get', 'post'], 'home', ['as' => 'home', 'uses' => 'FrontController@index']);
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