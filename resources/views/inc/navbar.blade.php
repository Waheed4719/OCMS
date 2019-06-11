<div  class="site-header d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" >
        <h4 class="my-0 mr-md-auto font-weight-bold">{{config('app.name', 'Blogapp')}}</h4>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-3 text-dark" href="/">Home</a>
          <a class="p-3 text-dark" href="/about">About</a>
          <a class="p-3 text-dark" href="/services">Services</a>
          <a class="p-3 text-dark" href="/posts">Blog</a>
          <a class="p-3 text-dark" href="/posts/create">Create Post</a>
          
       
        <a class="m-2 btn btn-outline-primary" href="{{ route('login')}}">Log in</a>
        <a class="m-2 btn btn-outline-dark" href="#">Reginster</a>
    </nav>
</div>

