@extends('admin.admin_home')

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

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Admin Table</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Users</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Users</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($admins as $u)
              <tr>
                  <td>{{$u->name}}</td>
                  <td>{{$u->email}}</td>
                  <td><a href="" class="far fa-edit"></a><a href="" class="fa fa-trash"></a></td>
              </tr>
            @endforeach

          </tbody>
          {{$admins->links()}}
        </table>
        <div class="text-center" >
          <a href="{{ route('admin.register') }}" id = "btn" class = "btn btn-success">Create an Admin User</a>

        </div>
      </div>
    </div>
  </div>
@endsection
