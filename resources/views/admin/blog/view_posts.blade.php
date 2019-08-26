@extends('admin.admin_home')

@section('content')
  <style media="screen">
     th{
      font-weight: bold;
    }
    td a {
      margin: 0px 5px;
    }




      </style>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Blog Posts</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>Posts</th>
                  <th></th>
                  <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                  <th>Posts</th>
                  <th></th>
                  <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach ($posts as $p)
                <tr>
                    <td>{{$p->title}}</td>
                    <td></td>
                    <td><a href="" class="btn btn-primary">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
              @endforeach

            </tbody>
            {{$posts->links()}}
          </table>
          <div class="text-center" >
            <a href="{{ route('create_posts') }}" id = "btn" class = "btn btn-success">Create a Post</a>

          </div>
        </div>
      </div>
    </div>
@endsection
