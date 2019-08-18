<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\Appointments;
use App\Therapists;
use Auth;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function __construct(){
    // $this->middleware('auth');
    // $this->middleware('auth:therapist');
  }

  // public function user_list(){


    //   $user_id = auth()->user()->id;
    //
    //     $User = User::find($user_id);
    //     $ap = Appointments::all();
    //   $u = $User->Appointment()->get();
    //   if(!\Request::Ajax()){
    //     return abort(404);
    //
    // }
    // else{
    //   return response()->json($u,200);
    // }
  //   $users = User::latest()->where('id','!=',auth()->user()->id)->get();
  //   if(\Request::Ajax()){
  //     return abort(404);
  //   }
  //   else{
  //
  //     return response()->json($users,200);
  //   }
  // }





  public function user_list(){


    if (Auth::guard('therapist')->check()) {
      $user_id= Auth::guard('therapist')->id();
      $User = Therapists::find($user_id);
       $u = $User->Appointment()->select('patient_id')->get();
       $arr = json_decode($u,true);
       $q = User::whereIn('id',$arr)->get();
    } // checks if the user is authenticated
      elseif(Auth::guard('web')->check()){
        $user_id = auth()->user()->id;
        $User = User::find($user_id);
        $u = $User->Appointment()->select('therapist_id')->get();
        $arr = json_decode($u,true);
        $q = Therapists::where('id',$arr)->get();
      }



    // $users = Therapists::latest()->where('id','!=',auth()->user()->id)->get();
    if(\Request::Ajax()){
      return response()->json($q,200);


    }
    else{
      return abort(404);

    }
  }




  public function user_Message($id = null){
    // if(!\Request::Ajax()){
    //   return Abort(404);
    // }

    // $messages = Message::where('to',$id)->get();
    $user_id=null;
    if (Auth::guard('therapist')->check()) {

      $user = User::findorfail($id);
      $messages = Message::where(function($q) use($id){
        $user_id= Auth::guard('therapist')->id();
        $q->where('from',Auth::guard('therapist')->id());
        $q->where('to',$id);
      })->with('User','Therapists')->
      // orWhere(function($q) use($id){
      //   $q->where('from',$id);
      //   $q->where('to',Auth::guard('therapist')->id());
      // })->
      get();}


      elseif(Auth::guard('web')->check()){
        $user = Therapists::findorfail($id);
        $messages = Message::where(function($q) use($id){
          $user_id = auth()->user()->id;
        //   $q->where('from',auth()->user()->id);
        //   $q->where('to',$id);
        // })->orWhere(function($q) use($id){
          $q->where('from',$id);
          $q->where('to',auth()->user()->id);
        })->with('User','Therapists')->get();}



        return response()->
        json([
          'messages' => $messages,
          'user' => $user,
        ]);
        // json($messages,200);


          }


}
