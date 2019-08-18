<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Therapists</title>
<script src="{{asset('/js/jquery-3.4.1.js')}}" charset="utf-8"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/all.css')}}">


    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<style media="screen">

</style>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">OCMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Therapists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Advice</a>
                     </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Drop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>


                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>

      <!-- Header -->
      <header class="bg-primary text-center py-5 mb-4" style="background-color: #4056F4 !important;">
        <div class="container">
          <h1 class="font-weight-light text-white">Meet Our Therapists</h1>
        </div>
      </header>





      
<div class="container-fluid row">
  <div class="card m-4" style="width: 12rem;height:15rem;">
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
  <div class="container ">

    <div class="row dva">



      <!-- Team Member 1 -->
      {{-- <div class="col-xl-3 col-md-6 mb-4 "> --}}
        {{-- <div class="card border-0 shadow">
          <img src="{{asset('img/TH1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Jony Carter</h5>
            <div class="card-text text-black-50">San Fransisco, USA</div>
            <div class="card-text text-black-50">email@example.com</div>
            <div class="card-text text-black-50">www.jhoncarter.com</div>
            <div><button type="button" class="btn btn-primary mt-3" style="background-color: #4056F4 !important;">View Profile</button></div>
          </div>
        </div> --}}
      {{-- </div> --}}

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</div>
      <!-- Page Content -->















      <!-- Footer -->
      <footer class="pt-5 pb-4" id="contact">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                          <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                          <p class="mb-4">We are with you till the end.</p>
                          <ul class="f-address">
                              <li>
                                  <div class="row">
                                      <div class="col-1"><i class="fas fa-map-marker"></i></div>
                                      <div class="col-10">
                                          <h6 class="font-weight-bold mb-0">Address:</h6>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-1"><i class="far fa-envelope"></i></div>
                                      <div class="col-10">
                                          <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                                          <p><a href="#">Support@userthemes.com</a></p>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                                      <div class="col-10">
                                          <h6 class="font-weight-bold mb-0">Address:</h6>
                                          <p><a href="#">+880 1672365547</a></p>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                          <h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
                          <ul class="f-address">
                              <li>
                                  <div class="row">
                                      <div class="col-1"><i class="fab fa-twitter"></i></div>
                                      <div class="col-10">
                                          <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                          <label>10 Mins Ago</label>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-1"><i class="fab fa-twitter"></i></div>
                                      <div class="col-10">
                                          <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                          <label>10 Mins Ago</label>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-1"><i class="fab fa-twitter"></i></div>
                                      <div class="col-10">
                                          <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                          <label>10 Mins Ago</label>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                          <h5 class="mb-4 font-weight-bold">NAVIGATION</h5>
                          <ul class="recent-post">
                              <li>
                                  <a href="#">Home</a>
                              </li>
                              <li>
                                  <a href="#">Therapists</a>
                              </li>
                              <li>
                                  <a href="#">Advice</a>
                              </li>
                              <li>
                                  <a href="#">About</a>
                              </li>
                              <li>
                                  <a href="#">Contact</a>
                              </li>
                          </ul>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                          <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
                          <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
                          </div>
                          <ul class="social-pet mt-4">
                              <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                              <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </footer>
          <!-- Copyright -->
          <section class="copyright">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 ">
                          <div class="text-center text-white">
                              &copy; 2019 OCMS. All Rights Reserved.
                          </div>
                      </div>
                  </div>
              </div>
          </section>

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
</body>
</html>
