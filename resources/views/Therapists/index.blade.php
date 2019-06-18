@extends('layout.app')


@section('content')

<style media="screen">
.card{
  margin: auto;
  margin-bottom:30px;
  text-align: center;
}
/* .card-title{
  font-weight: 800 !important;
} */
/* .card-text{
  font-weight:bold;
} */
.row{
  margin-top:20px;
}
#h1{
  margin-top:50px;
}
.b{
  margin-top:5px;
}
.card .text{
  text-align: right;
}
.cont:hover{
  color:white !important;
}
#create{
  text-decoration: none;
}
.card{
  border: 2px solid #eee;
  margin-left: 10em;
}
.card-text{

}
.pagination{
  margin-top: 80px;
  margin-left:60em;
}

.title {
    font-size: 60px;
}
.m-b-md {
    margin-bottom: 30px;
}
body{
  background-color: white;
}
</style>


  <h1 id ="h1" align=center class = "title m-b-md">This is the Therapist page!</h1>




  @foreach ($therapist as $therapists)


    <div class="p-4 mt-3 mb-3 card">
        <div class="row">
            <div class="col-md-4 col-sm-4">
            <img style="width:80%"src="/storage/images/{{$therapists->image}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="#">{{$therapists->name}}</a></h3>

                <p class="pt-4">{{$therapists->email}}</p>

            </div>

        </div>


    </div>
  @endforeach

{{$therapist->links()}}

{{-- </div>
<div class="container cont">
  <a   class="btn btn-primary"id = "create" href="{{url('/posts/create')}}">Create a post</a>
</div> --}}
{{-- {{$therapist->links()}} --}}

@endsection
