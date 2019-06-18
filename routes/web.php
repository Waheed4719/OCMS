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
    return view('home.landing');
});

Route::resource('posts','PostsController');


Route::get('admin/UserRole','AdminController@UserRole')->name('UserRole');
Route::get('admin/check_therapists','AdminController@check_therapists')->name('check_therapists');
Route::get('admin/check_admins','AdminController@check_admins')->name('check_admins');
Route::get('admin/register','Admin\RegisterController@create')->name('admin.register')->middleware('auth:admin');
Route::post('admin/register','Admin\RegisterController@store')->name('admin.register');
Route::get('admin/check_normalusers','AdminController@check_normalusers')->name('check_normalusers');

Route::get('admin/blog/view_posts','AdminController@view_posts')->name('view_all');

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
