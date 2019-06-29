@extends('layout.app')

@section('content')
  <h1>This is the Appointments page</h1>
@foreach ($u as $us)


<h3>{{$us->users->name}}, you have an Appointment with {{$us->therapists->name}}</h3>
@endforeach

@endsection
