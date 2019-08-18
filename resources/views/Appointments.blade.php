@extends('layout.app')

@section('content')

  <style media="screen">
    .card{
      background-color: white;
      color: darkslategray;
      box-shadow: 7px 5px 20px grey;
    }
    .col-md-3{
      margin-left: 0px;

    }

  .r{

    padding: 0.5rem 0rem;
    display: flex;
    justify-content: space-between;
  }


    h3{
      font-weight: bold;
      font-size: 25px;
    }
    h5{
      color: darkslategray;
      font-weight: bold;
        font-size: 18px;

    }
    .Ap  p{
      font-size: 18px;
      font-weight: bold;
    }
    .Ap{
      height: 280px;
    }
  </style>


@foreach ($u as $us)


{{-- <h3>{{$us->users->name}}, you have an Appointment with {{$us->therapists->name}}</h3> --}}

<div class="row">
    <div class="col-md-8 col-sm-8">
<div class="p-4 mt-3 mb-3 card Ap">

          <h3 >Appointment:</h3>
          <hr color="silver"  height:5px;>
          <section class ="r">
            <div class="item">
              <p>Therapist: </p>
              <p>Issue: </p>
              <p>Type of Appointment: </p>
            </div>

            <div class="item">
              <p>{{$us->therapists->name}}</p>
                <p>Marriage Problems</p>
              <p>Text-Chat</p>
            </div>
          </section>

        </div>
        <div class="col-md-1 col-sm-1">

        </div></div>

        <div class="col-md-3 col-sm-3">

          <div class="p-4 mt-3 mb-3 card Ap">

            <h3>Data and Time</h3>
            <hr color="silver"  height:5px;>
            <h5>{{$us->date}}</h5>

            <h3 style="margin-top: 20px;">Venue</h3>
            <hr color="silver"  height:5px;>
            <h5>Online Chat Portal</h5>
        </div>

    </div>


</div>

@endforeach

@endsection
