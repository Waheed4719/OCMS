<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class TherapistLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'therapist/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest:therapist')->except('logout');
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
      if(auth::guard('therapist')->check()){
        return redirect()->route('Therapist.profile');
      }
      else
        return view('Therapists.login');
    }
    public function create(){

    }

    protected function guard()
    {
        return Auth::guard('therapist');
    }

    public function logout(Request $request)
   {
       Auth::guard('therapist')->logout();
       $request->session()->flush();
       $request->session()->regenerate();
       return redirect()->guest(route( 'therapist.login' ));
   }

}
