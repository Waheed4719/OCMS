@extends('layouts.app')
@section('content')


    <title>Therapists</title>



      <!-- Header -->



      <header class="bg-primary text-center py-5 mb-4 mt-0" style="background-color: #4056F4 !important;">
        <div class="container">
          <h1 class="font-weight-light text-white">Meet Our Therapists</h1>
        </div>
      </header>

  <div class="container ">

    <div class="row">
      <div class="col-lg-3">
        <div class="list-group mb-4 ">
           <a href="#" class="list-group-item "><strong>Religion</strong></a>
             <div class="form-check form-check-inline mt-2">
             <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Muslim">
             <label class="form-check-label" for="inlineRadio1">Muslim</label>
           </div>
           <div class="form-check form-check-inline mt-2">
             <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Christian">
             <label class="form-check-label" for="inlineRadio1">Christian</label>
           </div>
           <div class="form-check form-check-inline my-2">
             <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Hindu">
             <label class="form-check-label" for="inlineRadio1">Hindu</label>
           </div>
           <div class="form-check form-check-inline mb-2">
             <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Buddhist">
             <label class="form-check-label" for="inlineRadio1">Buddhist</label>
           </div>

           <a href="#" class="list-group-item mt-2"><strong>Gender</strong></a>
           <div class="form-check form-check-inline mt-2">
           <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio2" value='Male'>
           <label class="form-check-label" for="inlineRadio2">Male</label>
           </div>
           <div class="form-check form-check-inline my-2 pb-2">
           <input class="form-check-input ml-3 " type="radio" name="inlineRadioOptions" id="inlineRadio2" value='Female'>
           <label class="form-check-label" for="inlineRadio2">Female</label>
           </div>

           <a href="#" class="list-group-item mt-2"><strong>Specialities</strong></a>
           <div class="form-check form-check-inline my-2 ">
           <input class="form-check-input ml-3" type="radio" name="inlineRadioOptions" id="inlineRadio3" value='Marital Problems'>
           <label class="form-check-label" for="inlineRadio3">Marital Problems</label>
           </div>
           <div class="form-check form-check-inline my-2 ">
           <input class="form-check-input ml-3 " type="radio" name="inlineRadioOptions" id="inlineRadio3" value='Teenage Issues'>
           <label class="form-check-label" for="inlineRadio3">Teenage Issues</label>
           </div>
           <div class="form-check form-check-inline my-2 ">
           <input class="form-check-input ml-3 " type="radio" name="inlineRadioOptions" id="inlineRadio3" value='Peer Pressure'>
           <label class="form-check-label" for="inlineRadio3">Peer Pressure</label>
           </div>
           <div class="form-check form-check-inline my-2 ">
           <input class="form-check-input ml-3 " type="radio" name="inlineRadioOptions" id="inlineRadio3" value='Parental Issues'>
           <label class="form-check-label" for="inlineRadio3">Parental Issues</label>
           </div>
             <input type="text" class="form-control  my-2 p-3" name="" id="search" value="" placeholder="Search by Name/Religion/Gender">


         </div>
      </div>
      <div class="col-lg-9 row dva ">


      </div>





    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


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
          jQuery(document).on('click','#inlineRadio3',function(){

            var query = $(this).val();
            fetch_customer_data(query);
          });
        });




      </script>
      @endsection
