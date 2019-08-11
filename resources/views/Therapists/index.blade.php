@extends('layout.app')


@section('content')

<style media="screen">

.row{
  margin-top:20px;
}
#h1{
  margin-top:50px;
}

.well{
  border: 0px solid gray;
  border-radius: 10px;
  padding:10px;
  box-shadow: 3px 4px 10px grey;
}


.pagination{
  margin-top: 80px;
  margin-left:60em;
}

.social{
  width:80px;
  font-size: 15px;
}

.profile{
margin-top:20px;
}

.dropdown-menu > li{
  font-size: 12px;
}
.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
.form-check-inline{
  padding: 5px;
}
</style>


  <h1 id ="h1" align=center class = "title m-b-md">This is the Therapist page!</h1>



<div class="row ">


<div class="col-md-3 mt-5">
  <div class="card" style="width: 18rem;">
    <div class="card-header">
      Religion
    </div>
    <ul class="list-group list-group-flush">
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Muslim">
      <label class="form-check-label" for="inlineRadio1">Muslim</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Christian">
      <label class="form-check-label" for="inlineRadio2">Christian</label>
    </div>
    <input type="text" class="form-control" name="" id="search" value="">
    </ul>
  </div>
</div>

  {{-- @foreach ($therapist as $therapists)

@if($therapists->age<46)
    <div class="col-xs-12 col-sm-10  col-md-4 mt-4">
              <div class="well well-sm">
                  <div class="row ">
                      <div class="col-sm-6 col-md-4 text-center">
                          <img  style="width:100%" src="/storage/therapists/images/{{$therapists->image}}" alt="" class="img-rounded img-responsive" />
                          <button type="button" class="btn profile btn-primary">
                              View Profile</button>
                      </div>
                      <div class="col-sm-6 col-md-8">
                          <h4><strong>{{$therapists->name}}</strong></h4>
                          <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                          </i></cite></small>
                          <p>
                              <i class="glyphicon glyphicon-envelope"></i>email@example.com
                              <br />
                              <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                              <br />
                              <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                          <!-- Split button -->
                          <div class="btn-group">
                              <button type="button" class="btn social btn-primary">
                                  Social</button>
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span><span class="sr-only">Social</span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Twitter</a></li>
                                  <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Github</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>@endif




  @endforeach --}}
  <div class="col-md-9 ">
    <div class="row dva">

    </div>
  </div>
</div>

{{$therapist->links()}}


<script type="text/javascript">

  jQuery(document).ready(function(){
    console.log("hello world");
    fetch_customer_data();
    function fetch_customer_data(query = '')
    {
      console.log("it got inside");
      $.ajax({
        url:"{{route('live_search')}}",
        method: 'GET',
        data:{query:query},
        dataType: 'json',
        success:function(data)
        {
          console.log('It was a success');
          $('.dva').html(data.table_data);
        }
      })
    }
    jQuery(document).on('keyup','#search',function(){

      var query = $(this).val();
      fetch_customer_data(query);
    });
  });




</script>
@endsection
