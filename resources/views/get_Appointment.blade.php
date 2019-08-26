@extends('Layouts.app')
@section('content')

  <style media="screen">
  .well-block {
  background-color: #fff;
  border: 1px solid #e9e6e8;
  padding: 40px;
}

.well-title {
  margin-bottom: 40px;
}
  </style>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block ">
                        <div class="well-title">
                            <h2>Questions? Book an Appointment</h2>
                        </div>
                        <form method = "POST" action="{{ route('store_Appointment_info') }}">
                          @csrf
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="day">Preferred Day</label>

                                          {!!  Form::select('day', ['Sunday' => 'Sunday','Monday' => 'Monday', 'Tuesday' => 'Tuesday','Wednesday' => 'Wednesday','Thursday' => 'Thursday','Friday' => 'Friday','Saturday' => 'Saturday', ],  'Friday', ['class' => 'form-control ' ]) !!}
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                      
                                          {!!  Form::select('time', ['8:00 to 9:00' => '8:00 to 9:00','9:00 to 10:00' => '9:00 to 10:00', '10:00 to 1:00' => '10:00 to 1:00', ],  '8:00 to 9:00', ['class' => 'form-control ' ]) !!}
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Appointment For</label>
                                        {{-- <select id="medium" name="medium" class="form-control">
                                            <option value="Chat">Online Message Chat</option>
                                            <option value="Video-chat">Online Video Chat</option>
                                            <option value="Live">Face to Face meeting</option>
                                        </select> --}}
                                        {!!  Form::select('medium', ['Chat' => 'Online Message Chat','Video Chat' => 'Online Video Chat', 'Live' => 'Face To Face meeting', ],  '8:00 to 9:00', ['class' => 'form-control ' ]) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Appointment With</label>
                                        <select id="therapist" name="therapist" class="form-control">
                                          @foreach ($th as $th)
                                              <option value="{{$th->id}}">{{$th->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="issue">Issues</label>
                                        <select id="issue" name="issue" class="form-control">
                                              <option value="Marital Issues">Marital Issues</option>
                                          <option value="Parental Issues">Parental Issues</option>
                                          <option value="Teenage Issues">Teenage Issues</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Make An Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Why Appointment with Us</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
