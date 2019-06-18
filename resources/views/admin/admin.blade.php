@extends('layout.admin_app')

@section('content')

  <style media="screen">
     th{
      font-weight: bold;
    }
  </style>
  <table class="table table-striped">
      <tr>
          <th>User Roles</th>
          <th></th>
          <th>Action</th>
      </tr>

      <tr>
          <td>Admins</td>
          <td></td>
          <td><a href="{{route("check_admins")}}" class="btn btn-primary">Check</a></td>
      </tr>
      <tr>
          <td>Therapists</td>
          <td></td>
          <td><a href="{{route("check_therapists")}}" class="btn btn-primary">Check</a></td>
      </tr>
      <tr>
          <td>Normal Users</td>
          <td></td>
          <td><a href="{{route("check_normalusers")}}" class="btn btn-primary">Check</a></td>
      </tr>

  </table>

@endsection
