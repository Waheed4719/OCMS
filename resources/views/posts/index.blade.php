@extends('layout.app')

@section('content')
<style media="screen">
  .card{
    box-shadow: 7px 4px 10px grey;
  }
</style>

    <h1 class = "mt-5">Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="p-4 mt-3 mb-3 card">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width:80%"src="/storage/images/{{$post->image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <p class="pt-4">{{$post->content}}</p>

                    </div>

                </div>


            </div>
        @endforeach

        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
    @if(!Auth::guest())
      <a href="{{ route('create') }}">Create a thread</a>
    @endif

@endsection
