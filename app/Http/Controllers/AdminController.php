<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Therapists;
use App\User;
use App\Post;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


      protected $guard = 'admin';

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }


    public function view_posts(){
      $posts = Post::paginate(6);
      return view('Admin.blog.view_posts',compact('posts'));
    }
    public function create_posts(){

      return view('Admin.blog.create_posts');
    }

    public function check_therapists(){
      $therapists = Therapists::paginate(6);
        return view('admin.therapists',compact('therapists'));
    }

    public function check_admins(){
      $admins = Admin::paginate(6);
        return view('admin.admin-users',compact('admins'));
    }
    public function check_normalusers(){
      $users = User::paginate(6);
        return view('admin.normal-users',compact('users'));
    }

    public function UserRole()
    {
        return view('admin.create_users');
    }
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */

}
