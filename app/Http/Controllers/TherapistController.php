<?php

namespace App\Http\Controllers;


use App\User;
use App\Therapists;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $therapist = Therapists::paginate(6);
        return view('Therapists.Therapists',compact('therapist'));
    }
    public function profile()
    {
      Auth::guard('therapist');
      return view('Therapists.profile');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
      $output = '';
      if($request->ajax())
      {
        $query = $request->get('query');
        if($query != '')
        {
          $data = DB::table('therapists')
          ->Where('Name','like','%'.$query.'%')
          ->orWhere('religion','like','%'.$query.'%')
          ->orWhere('age','like','%'.$query.'%')
          ->orderBy('name','desc')
          ->get();
        }
        else {
          $data = DB::table('therapists')
          ->orderBy('Name','desc')
          ->get();
        }
        $total_row = $data->count();
        if($total_row>0)
        {
          // $output .= '<h1 class = "text-center"> Total Number of Records are'.$total_row.'</h1>';
          foreach($data as $row)
          {
            $output .=  '




            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-0 shadow">
                <img src="/storage/therapists/images/'.$row->image.'" class="card-img-top" alt="...">
                <div class="card-body text-center">
                      <h5 class="card-title mb-0">'.$row->name.'</h5>
                      <div class="card-text text-black-50">San Fransisco, USA</div>
                      <div class="card-text text-black-50">'.$row->email.'</div>
                      <div class="card-text text-black-50">www.jhoncarter.com</div>
                      <div><button type="button" href="" class="btn btn-primary mt-3" style="background-color: #4056F4 !important;">View Profile</button></div>
                   </div>
              </div>
            </div>';









            // ';
          }
        }
        else{
          $output = '
              <h1>No matches found</h1>
          ';
        }
        $data = array(
          'table_data' => $output
        );

        echo json_encode($data);
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
