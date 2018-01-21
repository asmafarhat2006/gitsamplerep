@extends('home')

@section('content')
<h2>Edit {{ $event->EventName }}</h2>
{!! Form::model($event,[ 'method' => 'PATCH','action' => ['EventsController@update',$event->ID]	]) !!}
@include('_forms',['submitButtonText' => 'Update Event'])
@include('errors.formerrors')


{!! Form::close() !!}
@stop


