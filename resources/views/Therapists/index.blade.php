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
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Christian">
      <label class="form-check-label" for="inlineRadio1">Christian</label>
    </div>
    <input type="text" class="form-control  p-3" name="" id="search" value="" placeholder="Search by name,religion or age">
    </ul>

    <div class="card-header">
      Age Group
    </div>
    <ul class="list-group list-group-flush">
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="46">
      <label class="form-check-label" for="inlineRadio2"> 46 </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="35">
      <label class="form-check-label" for="inlineRadio2"> 35 </label>
    </div>

    </ul>

  </div>


</div>

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
      jQuery('.form-check-input').prop('checked',false);

      var query = $(this).val();
      fetch_customer_data(query);


    });
    jQuery(document).on('click','#inlineRadio1',function(){

      var query = $(this).val();
      fetch_customer_data(query);

    });
    jQuery(document).on('click','#inlineRadio2',function(){

      var query = $(this).val();
      fetch_customer_data(query);
    });
  });




</script>
@endsection
