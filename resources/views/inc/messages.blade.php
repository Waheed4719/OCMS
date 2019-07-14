<style media="screen">
  .err{
    height: 30px;
    width:100%;
    background-color: darkslategray;
    margin-top: 0px;
    padding-top: 2px;
    padding-bottom:1px;
    color: goldenrod;
    font-weight: bold;
    text-align: center;
  }
</style>
@if(count($errors)>0)
    @foreach ($errors->all() as $error)
        {{-- <div class="alert alert-danger">
            {{$error}}
        </div> --}}
        <div class="err">
          {{$error}}
        </div>

    @endforeach
@endif

@if(session('success'))
        <div class="alert alert-success ">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        {{-- <div class="alert alert-danger">
            {{session('error')}}
        </div> --}}
        <div class="err ">
          {{session('error')}}
        </div>

@endif

@if(session('primary'))
        <div class="alert alert-primary ">
            {{session('primary')}}
        </div>
@endif
