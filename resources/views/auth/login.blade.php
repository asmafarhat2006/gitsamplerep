@extends('home')

@section('content')
<h2>Login form</h2>


{!! Form::open(array('url' => '/auth/login')) !!}
 {!! csrf_field() !!}
<div class="form-group">
    {!! Form::label('lblemail', 'Email');!!}
	{!! Form::text('email',Auth::check() ? Auth::user() ->email:'',['class'=>'form-control']);!!}
</div>
<div class="form-group">
    {!! Form::label('lblpass', 'Password');!!}
	{!! Form::password('password',['class'=>'form-control']);!!}
</div>

<div class="form-group">
{!! Form::submit('Login',['class'=>'btn btn-primary']);!!}
</div>
<div class="form-group">
{!! Form::checkbox('remember','value',Auth::check()?true:false); !!} Remember Me
</div>
{!! Form::close() !!}
@stop


