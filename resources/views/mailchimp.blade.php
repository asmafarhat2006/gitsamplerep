
@extends('home')


@section('content')
<h2>Mailchimp templates</h2>
 @foreach($templates as $template)
	<img width="200" src="{{ $template["preview_image"] }}" />
 @endforeach





@stop


