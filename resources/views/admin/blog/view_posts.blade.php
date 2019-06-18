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
      <h1 align=center class = "mt-3">All  Posts</h1>
      @if(count($posts)>0)
      <table class="table table-striped">
          <tr>
              <th>Posts</th>
              <th>Content</th>
              <th>Action</th>
          </tr>
          @foreach ($posts as $p)
            <tr>
                <td>{{$p->title}}</td>
                <td>{{$p->content}}</td>
                <td><a href="" class="btn btn-primary">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
            </tr>


          @endforeach

      </table>

        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
    <div class="text-center" >
      <a href="{{ route('create') }}" id = "btn" class = "btn btn-success">Create a thread</a>

    </div>


@endsection
