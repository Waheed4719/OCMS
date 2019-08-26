@extends('admin.admin_home')

@section('content')
    <div class="container">

          <h1 class="mt-5">Create a Post</h1>
      {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
          {{Form::label('content', 'Content')}}
          {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
      </div>
      <div class="form-group">
          {{Form::file('image')}}
      </div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>




@endsection
