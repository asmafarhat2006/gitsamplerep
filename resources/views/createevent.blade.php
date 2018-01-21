@extends('home')

@section('content')
<h2>Create Event</h2>
{!! Form::open(array('action' => 'EventsController@store')) !!}
@include('_forms',['submitButtonText' => 'Add Event'])
@include('errors.formerrors')

{!! Form::close() !!}
@stop


