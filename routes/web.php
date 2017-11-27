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
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
$slugPattern = '[a-z0-9\-]+';

Route::get('/admin','PagesController@admin')->middleware('can:isAdmin');
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin', 'middleware' => 'can:isAdmin'],function (){
    // Visits
    Route::resource('visits', 'VisitsController',['except'=> ['create', 'show']]);
    Route::get('visits/create/{account}', 'VisitsController@create')->name('visits.create')->where('slug', '[a-z\-]+');
    Route::get('visits/{slug}', 'VisitsController@show')->name('visits.show')->where('slug', '[a-z\-]+');
    // Videos
    Route::resource('videos', 'VideosController',['except'=> ['create', 'show']]);
    Route::get('videos/create/{account}', 'VideosController@create')->name('videos.create')->where('slug', '[a-z\-]+');
    Route::get('account/{account}/video/{slug}', 'VideosController@show')->name('videos.show')->where('slug', '[a-z\-]+');
    // Accounts
    Route::resource('accounts', 'AccountsController',['except'=>'show']);
    Route::get('account/{account}', 'AccountsController@show')->name('accounts.show')->where('slug', '[a-z\-]+');
    // Users
    Route::resource('users', 'UsersController',['except'=>'create']);
    Route::get('users/create/{account_id}','UsersController@create')->name('users.create');
});

//AUTH ROUTES
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/reset/{token}','Auth\ForgotPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset','Auth\ForgotPasswordController@reset')->name('password.request');
Route::post('register','Auth\RegisterController@register');
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');

// UPLOADS
Route::get ('resumable/upload', 'UploadController@resumableUpload');
Route::post('resumable/upload', 'UploadController@resumableUpload');