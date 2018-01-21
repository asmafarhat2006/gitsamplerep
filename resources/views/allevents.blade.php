@extends('home')

@section('content')
<h2>My Events {{ $user->name }}</h2>
@foreach ($events as $event)
    <p>This is event <a href="{{ action('EventsController@show',$event->ID)}}">{{ $event->EventName }}</a> <p>Published At: {{ $event->published_at }}</p>
	 {!!  link_to_action('EventsController@edit','Edit',$event->ID) !!}
	
	</p>
@endforeach

<div class="form-group">
  {!!  link_to_action('EventsController@create','Create A New Event') !!}
</div>
@stop


