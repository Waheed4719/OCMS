@extends('admin.admin_home')

@section('content')

  <style media="screen">
     th{
      font-weight: bold;
    }
    td a {
      margin: 5px 10px;
    }

  </style>




  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User Table</h6>
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
            @foreach ($users as $u)
              <tr>
                  <td>{{$u->name}}</td>
                  <td>{{$u->email}}</td>
                  <td><a href="" class="far fa-edit"></a><a href="" class="fa fa-trash"></a></td>
              </tr>
            @endforeach



          </tbody>
          {{$users->links()}}

        </table>
        <div class="text-center" >
          <a href="{{ route('create_users') }}" id = "btn" class = "btn btn-success">Create a Normal User</a>

        </div>
      </div>
    </div>
  </div>
@endsection





<!-- Page Heading -->
{{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<!-- DataTales Example -->
