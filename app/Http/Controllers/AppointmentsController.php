<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\Therapists;
use App\Appointments;

class AppointmentsController extends Controller
{
    public function index(){
      if(auth()->user()){
      $user_id = auth()->user()->id;

        $user = User::find($user_id);
        // $apps = $user->Appointment();
        $ap = Appointments::all();

        $u = $user->Appointment()->get();


        return view('Appointments',compact('ap','user','u'));
      }

      return redirect('/')->with('error', 'Must Log in first');
    }
}
