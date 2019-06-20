@extends('layout.admin_app')

@section('content')

  <style media="screen">
     th{
      font-weight: bold;
    }
    td a {
      margin: 0px 5px;
    }
    .fas{
      margin:10px;
    }
  </style>

  <h1 align=center class ="mb-3">All Admins</h1>
  <table class="table table-striped">
      <tr>
          <th>User Roles</th>
          <th>Email</th>
          <th>Action</th>
      </tr>
      @foreach ($admins as $a)
        <tr>
            <td>{{$a->name}}</td>
            <td>{{$a->email}}</td>
            <td><a href="" class="fas fa-edit"></a><a href="" class="fas fa-trash"></a><a href="" class="fas fa-envelope"></a></td>
        </tr>
      @endforeach



  </table>
  <div class="text-center" >
    <a href="{{ route('admin.register') }}" id = "btn" class = "btn btn-success">Create an Admin User</a>

  </div>
@endsection
