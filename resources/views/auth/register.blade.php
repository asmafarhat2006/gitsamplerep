@extends('master_public')

@section('title') Tribu Signup Page @stop
@section('styles')
<style>
.login-panel {
  margin-top: 15%;
}
.fullwidthfield{
  margin-left: 14px;
  width: 95%;
}
</style>
@stop
@section('pagewrapper')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                      {!! Form::open(array('url' => '/auth/register')) !!}
					  <fieldset>
					 {!! csrf_field() !!}
					 <div class="form-group">
						{!! Form::text('name',old('name'),['class'=>'form-control fullwidthfield','placeholder' => 'Full Name']);!!}
					</div>
					<div class="form-group">
						{!! Form::text('email',old('email'),['class'=>'form-control fullwidthfield','placeholder' => 'Email Address']);!!}
					</div>
					<div class="form-group col-md-6">
						{!! Form::password('password',['class'=>'form-control','placeholder' => 'Password']);!!}
					</div>
					<div class="form-group col-md-6">
						{!! Form::password('password_confirmation',['class'=>'form-control','placeholder' => 'Confirm Password']);!!}
					</div>
					<div class="form-group">
					{!! Form::submit('Get in the Ring',['class'=>'btn btn-lg btn-block','style'=>'background-color:#EC3853;color:#fff']);!!}
					</div>
					</fieldset>
					{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('errors.formerrors');
 

@stop


