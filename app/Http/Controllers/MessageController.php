<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\Appointments;
use App\Therapists;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// $cP=\Request::route()->getName();
    if (Auth::guard('therapist')->check() ) {
      $user_id= Auth::guard('therapist')->id();
      $User = Therapists::find($user_id);
       $u = $User->Appointment()->select('patient_id')->get();
       $arr = json_decode($u,true);
       $q = User::whereIn('id',$arr)->get();
    } // checks if the user is authenticated
      elseif(Auth::guard('web')->check() ){
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
        $q->where('d-type',0);
      })->with('User','Therapists')->get();
    }


      elseif(Auth::guard('web')->check()){
        $user = Therapists::findorfail($id);
        $messages = Message::where(function($q) use($id){
          $user_id = auth()->user()->id;
          $q->where('from',$id);
          $q->where('to',auth()->user()->id);
          $q->where('d-type',1);
        })->with('User','Therapists')->get();}



        return response()->
        json([
          'messages' => $messages,
          'user' => $user,
        ]);
        // json($messages,200);


          }





          public function send_Message(Request $request){
            // if(!$request!=ajax()){
            //   abort(404);
            // }

              if(Auth::guard('therapist')->check()){
              $messages = Message::create([
                'message' =>$request->message,
                'from' =>auth::guard('therapist')->user()->id,
                'to' => $request->user_id,
                'type' => 0,
                'd-type' =>0,

              ]);

              $messages = Message::create([
                'message' =>$request->message,
                'from' =>auth::guard('therapist')->user()->id,
                'to' => $request->user_id,
                'type' => 0,
                'd-type' =>1,
              ]);





            }
              else  if(Auth::guard('web')->check()){
                $messages = Message::create([
                  'message' =>$request->message,
                  'to' =>auth()->user()->id,
                  'from' => $request->user_id,
                  'd-type' => 0,
                ]);

                $messages = Message::create([
                  'message' =>$request->message,
                  'to' =>auth()->user()->id,
                  'from' => $request->user_id,
                  'd-type' => 1,
                ]);

              }
              // return response()->json($messages,201);
              return response()->json($messages,201);

          }




          public function delete_Single_Message($id=null){
            if(!\Request::ajax()){
                return abort(404);
            }
            Message::findorFail($id)->delete();

            return response()->json('deleted',200);

          }
          public function delete_All_Messages($id = null){

            $messages = $this->message_by_user_Id($id);

              foreach ($messages as $value){
                  Message::findorFail($value->id)->delete();
              }
              return response()->json($messages,200);
          }


          public function message_by_user_Id($id){

            if (Auth::guard('therapist')->check()) {
              $user = User::findorfail($id);
              $messages = Message::where(function($q) use($id){
                $user_id= Auth::guard('therapist')->id();
                $q->where('from',Auth::guard('therapist')->id());
                $q->where('to',$id);
                $q->where('d-type',0);
              })->with('User','Therapists')->get();
            }


              elseif(Auth::guard('web')->check()){
                $user = Therapists::findorfail($id);
                $messages = Message::where(function($q) use($id){
                  $user_id = auth()->user()->id;
                  $q->where('from',$id);
                  $q->where('to',auth()->user()->id);
                  $q->where('d-type',1);
                })->with('User','Therapists')->get();
              }
              return $messages;
          }



}
