@extends('layout.app')

@section('content')
    <h1 class="mt-5">Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
    </div>
    <div class="form-group">
        {!! Form::label('category', 'Category', ['class' => 'col-lg-2 control-label'] )  !!}

          {!!  Form::select('category', ['Teenage Issues' => 'Teenage Issues', 'Parental Issues' => 'Parental Issues', 'Peer Pressure' => 'Peer Pressure', 'Marital Issues' => 'Marital Issues'],  'MI', ['class' => 'form-control' ]) !!}

       </div>
    <div class="form-group">
        {{Form::file('image')}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
