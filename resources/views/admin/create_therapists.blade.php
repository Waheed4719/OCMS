
@extends('layout.admin_app')

@section('content')
{{--
<table>
  <th>User Roles</th>
  <td></td>
</table> --}}

<h1>Create a therapist user</h1>

{!! Form::open(['action' => 'AdminController@store_therapist_info', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Therapist name'])}}
</div>
<div class="form-group">
    {{Form::label('email', 'Email')}}
    {{Form::text('email', '', [ 'class' => 'form-control', 'placeholder' => 'Email'])}}
</div>
<div class="form-group">
    {{Form::label('password', 'Password')}}
    {{-- {{Form::text('password', '', [ 'class' => 'form-control', 'placeholder' => 'password'])}} --}}
    {{ Form::password('password',array('required' => "required", 'class' => 'form-control', 'placeholder' => 'Password')) }}
</div>
<div class="form-group">
    {{Form::file('image')}}
</div>
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}




@endsection
