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
    Route::resource('medias', 'MediasController');
    Route::resource('accounts', 'AccountsController');
    Route::resource('users', 'UsersController');
});

//AUTH ROUTES
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/reset/{token}','Auth\ForgotPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset','Auth\ForgotPasswordController@reset')->name('password.request');
//Route::post('register','Auth\RegisterController@register');
//Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
