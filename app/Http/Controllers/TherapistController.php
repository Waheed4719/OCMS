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
                      <div><button type="button" class="btn btn-primary mt-3" style="background-color: #4056F4 !important;">View Profile</button></div>
                   </div>
              </div>
            </div>';








            // <div class="col-xs-12 col-sm-10  col-md-5 mt-4 mr-5">
            //           <div class="well well-sm">
            //               <div class="row ">
            //                   <div class="col-sm-6 col-md-4 text-center">
            //                       <img  style="width:100%" src="/storage/therapists/images/'.$row->image.'" alt="" class="img-rounded img-responsive" />
            //                       <button type="button" class="btn profile btn-primary">
            //                           View Profile</button>
            //                   </div>
            //                   <div class="col-sm-6 col-md-8">
            //                       <h4><strong>'.$row->name.'</strong></h4>
            //                       <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
            //                       </i></cite></small>
            //                       <p>
            //                           <i class="glyphicon glyphicon-envelope"></i>email@example.com
            //                           <br />
            //                           <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
            //                           <br />
            //                           <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
            //                       <!-- Split button -->
            //                       <div class="btn-group">
            //                           <button type="button" class="btn social btn-primary">
            //                               Social</button>
            //                           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            //                               <span class="caret"></span><span class="sr-only">Social</span>
            //                           </button>
            //                           <ul class="dropdown-menu" role="menu">
            //                               <li><a href="#">Twitter</a></li>
            //                               <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
            //                               <li class="divider"></li>
            //                               <li><a href="#">Github</a></li>
            //                           </ul>
            //                       </div>
            //                   </div>
            //               </div>
            //           </div>
            //       </div>









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
