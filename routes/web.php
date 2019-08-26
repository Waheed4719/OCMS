<?php
Use Carbon\Carbon;
use App\Therapists;
use App\Appointments;
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
    return view('layout.new');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/chat', function () {
  // $date = Carbon::now();
  // $date = $date->toArray();
  // $user = Auth::user()->id;
  // $ap = Appointments::all()->where('patient_id',$user);

  // if($date['day']==25){
return view('chat');
  // }
    // else{
    //   return view('layout.new')->with('success','Today is not the day you had an appointment with your therapist');
    // }
})->name('patient_Chat')->middleware('web','auth:web');
Route::get('/therapist/profile/chat', function () {

    return view('chat');
})->name('therapist_Chat')->middleware('auth:therapist');

Route::resource('posts','PostsController');



Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


//Chat Routes
Route::get('/userlist', 'MessageController@user_list')->name('user.list');
Route::get('/userMessage/{id}', 'MessageController@user_Message')->name('user.Message');
Route::post('/sendMessage', 'MessageController@send_Message')->name('user.Message.send');
Route::get('/deleteSingleMessage/{id}', 'MessageController@delete_Single_Message')->name('user.Message.delete.single');
Route::get('/deleteAllMessages/{id}', 'MessageController@delete_All_Messages')->name('user.Message.delete.all');







//Admin Routes
Route::GET('admin/home','AdminController@index');
Route::get('admin/UserRole','AdminController@UserRole')->name('UserRole');
Route::get('admin/check_therapists','AdminController@check_therapists')->name('check_therapists');
Route::POST('admin/check_therapists/{id}','AdminController@delete_therapist')->name('delete_therapists');

Route::get('admin/check_admins','AdminController@check_admins')->name('check_admins');
Route::get('admin/register','Admin\RegisterController@create')->name('admin.register')->middleware('auth:admin');
Route::post('admin/register','Admin\RegisterController@store')->name('admin.register');
Route::get('admin/check_normalusers','AdminController@check_normalusers')->name('check_normalusers');

Route::get('admin/blog/view_posts','AdminController@view_posts')->name('view_all');
Route::get('admin/blog/create','AdminController@create_posts')->name('create_posts');
Route::get('admin/create_users','AdminController@create_users')->name('create_users');
Route::post('admin/create_users','AdminController@store_user_info')->name('store_user_info');
Route::get('admin/create_therapist_user','AdminController@create_therapist_users')->name('create_therapist_user');
Route::post('admin/create_therapist_user','AdminController@store_therapist_info')->name('store_therapist_info');


//New layout
Route::get('/new',function(){
  return view('layout.new');
});


Route::get('therapist/login','TherapistLoginController@showLoginForm')->name('Therapist.login');
Route::POST('therapist/login','TherapistLoginController@login')->name('log');
Route::get('therapist/profile','TherapistController@profile')->name('Therapist.profile')->middleware('auth:therapist');
Route::get('/therapists', 'TherapistController@index')->name('therapists');
// Route::get('/therapists/search','TherapistController@search')->name('live_search');
Route::get('/therapists/search','TherapistController@search')->name('live_search');
Route::get('/therapist/profile/{id}','TherapistController@show');
Route::get('/therapist/profile/Appointments','TherapistController@therapists_Appointments')->middleware('auth:therapist');


Route::get('/Appointments','AppointmentsController@index');
Route::get('/Appointment','AppointmentsController@hasone');
Route::post('/get_Appointment','AppointmentsController@get_Appointment')->name('store_Appointment_info');

Route::get('/landing',function(){
  return view('home.landing');
});


Auth::routes();

// Route::get('/home', 'PostsController@index')->name('home');



Route::GET('/posts/create','PostsController@create')->name('create');
Route::get('/posts','PostsController@index')->name('advices');
Route::GET('/myposts','PostsController@myposts');
Route::GET('/filter_posts/{filter}','PostsController@filter');




Route::POST('admin/','Admin\LoginController@login');
Route::GET('admin/','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm');




?>
