@extends('layout.admin_app')

@section('content')

  <style media="screen">
     th{
      font-weight: bold;
    }
    td a {
      margin: 0px 5px;
    }

  </style>
  <h1 align=center class ="mb-3">All Normal Users</h1>
  <table class="table table-striped">
      <tr>
          <th>User Roles</th>
          <th>Email</th>
          <th>Action</th>
      </tr>

      @foreach ($users as $u)
        <tr>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td><a href="" class="far fa-edit"></a><a href="" class="fa fa-trash"></a></td>
        </tr>
      @endforeach
  </table>
  <div class="text-center" >
    <a href="{{ route('create') }}" id = "btn" class = "btn btn-success">Create a Normal User</a>

  </div>
@endsection
