<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Therapists;
use App\Appointments;
use DB;

class AppointmentsController extends Controller
{
    public function index(){
      if(auth()->user()){
      $user_id = auth()->user()->id;

        $user = User::find($user_id);
        $th = Therapists::all();
        // $apps = $user->Appointment();
        $ap = Appointments::all();

        $u = $user->Appointment()->get();
        $count = $user->Appointment()->get()->count();
        if($count > 0){
          return view('Appointments',compact('ap','user','u','th'));
        }


        return view('get_Appointment',compact('ap','user','u','th'));
      }

      return redirect('/')->with('error', 'Must Log in first');
    }

public function hasone(){
  if(auth()->user()){
  $user_id = auth()->user()->id;

    $user = User::find($user_id);
    $th = Therapists::all();
    // $apps = $user->Appointment();
    $ap = Appointments::all();

    $u = $user->Appointment()->get();


    return view('Appointments',compact('ap','user','u','th'));
  }

  return redirect('/')->with('error', 'Must Log in first');
}
    public function get_Appointment(Request $request){
      $day = $request->input('day');
      $this->validate($request, [

          'time' => 'required',
          'name' => 'required',
          'email' => 'required',
          'day' =>  'required',
          'therapist' => 'required',
          'issue' => 'required',
          'medium' => 'required',
      ]);
$user= Auth::user()->id;


      $count = Appointments::all()->where('day',$request->input('day'))->where('time',$request->input('time'))->count();
      if($count > 0){
        return redirect()->back()->with('error','Appointment date already booked by another person');
      }

      Appointments::Create([
        'patient_id' => $user,
        'therapist_id' => $request['therapist'],
        'issue' => $request['issue'],
        'medium' => $request['medium'],
        'time' =>$request['time'],
        'day' => $day,
      ]);


      return  redirect('new/')->with('success','Appointment Created!');
    }




}
