@include('Layouts.app')
@section('content')

@foreach ($th as $th)

@endforeach

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
                  <td>{{$th->user->name}}</td>
                  <td>{{$th->medium}}</td>
                  <td>{{$th->issue}}</td>


              </tr>
            @endforeach



          </tbody>
          {{$therapists->links()}}
        </table>
        <div class="text-center" >
          <a href="{{ route('therapist_Chat') }}" id = "btn" class = "btn btn-success">Create a Therapist User</a>

        </div>
      </div>
    </div>
  </div>


@endforeach

@endsection
