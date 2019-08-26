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
      <h6 class="m-0 font-weight-bold text-primary">Therapist Users Table</h6>
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
            @foreach ($therapists as $th)
              <tr>
                  <td>{{$th->name}}</td>
                  <td>{{$th->email}}</td>
                  <td>
                      <a href="" class="far fa-edit"></a><a href="{{url('admin/check_therapists/'.$th->id.'')}}" class="fa fa-trash"></a></td>


              </tr>
            @endforeach



          </tbody>
          {{$therapists->links()}}
        </table>
        <div class="text-center" >
          <a href="{{ route('create_therapist_user') }}" id = "btn" class = "btn btn-success">Create a Therapist User</a>

        </div>
      </div>
    </div>
  </div>
@endsection
