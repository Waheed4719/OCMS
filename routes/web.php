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

Route::resource('posts','PostsController');


Route::get('/posts','PostsController@index');
Route::get('/landing',function(){
  return view('home.landing');
});


Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');


Route::GET('admin/home','AdminController@index');
Route::GET('/posts/create','PostsController@create')->name('create');
Route::GET('/myposts','PostsController@myposts');





Route::POST('admin/','Admin\LoginController@login');
Route::GET('admin/','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm');

Route::get('/therapists', 'TherapistController@index')->name('therapists');
// Route::POST('admin/register','admin\RegisterController@register') ;
// Route::GET('admin/register','RegisterController@showRegistrationForm');

?>
