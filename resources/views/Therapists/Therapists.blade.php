@extends('layouts.app')
@section('content')


    <title>Therapists</title>



      <!-- Header -->



      <header class="bg-primary text-center py-5 mb-4 mt-0" style="background-color: #4056F4 !important;">
        <div class="container">
          <h1 class="font-weight-light text-white">Meet Our Therapists</h1>
        </div>
      </header>






<div class="container-fluid row ">
  <div class="card m-4 text-center" style="width: 14rem;height:16rem;border:none; ">
    <div class="card-header" >
      <strong>Religion</strong>
    </div>
    <ul class="list-group list-group-flush">
      <div class="form-check form-check-inline mt-2">
      <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Muslim">
      <label class="form-check-label" for="inlineRadio1">Muslim</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Christian">
      <label class="form-check-label" for="inlineRadio1">Christian</label>
    </div>
    <input type="text" class="form-control mt-2  p-3" name="" id="search" value="" placeholder="Search by name,religion or age">
    </ul>

    <div class="card-header">
      <strong>Age Group</strong>
    </div>
    <ul class="list-group list-group-flush pb-2 mt-2">
      <div class="form-check form-check-inline">
      <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="46">
      <label class="form-check-label" for="inlineRadio2"> 46 </label>
    </div>
    <div class="form-check form-check-inline mb-2 pb-2">
      <input class="form-check-input ml-3 " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="35">
      <label class="form-check-label" for="inlineRadio2"> 35 </label>
    </div>

    </ul>

  </div>
  <div class="container ">

    <div class="row dva">



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</div>
      <!-- Page Content -->

















      {{-- <script src="{{asset('js/jquery.slim.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> --}}
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
