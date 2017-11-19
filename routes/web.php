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

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

=======
Route::get('/home', 'HomeController@index')->name('home');

//AUTH ROUTES
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/reset/{token}','Auth\ForgotPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset','Auth\ForgotPasswordController@reset')->name('password.request');
//Route::post('register','Auth\RegisterController@register')->middleware('can:isAdmin');
//Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register')->middleware('can:isAdmin');
>>>>>>> e4d99e02fb050ae0045d53a582d0cad210f3e37d
