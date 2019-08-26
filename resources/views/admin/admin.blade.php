@extends('admin.admin_home')

@section('content')

  <style media="screen">
     th{
      font-weight: bold;
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
              <th>User Roles</th>
              <th></th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>User Roles</th>
              <th></th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
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

          </tbody>

        </table>
        <div class="text-center" >
          <a href="{{ route('admin.register') }}" id = "btn" class = "btn btn-success">Create an Admin User</a>

        </div>
      </div>
    </div>
  </div>
@endsection
