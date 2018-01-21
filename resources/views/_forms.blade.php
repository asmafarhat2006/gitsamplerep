<div class="form-group">
    {!! Form::label('lblevent', 'Event Name');!!}
	{!!  Form::text('EventName',null,['class'=>'form-control']);!!}
</div>
<div class="form-group">
    {!! Form::label('lbldate', 'Published At: ');!!}
	{!!  Form::input('date','published_at',Carbon\Carbon::now()->format('Y-m-d'),['class'=>'form-control']);!!}
</div>
<div class="form-group">
{!! Form::submit($submitButtonText,['class'=>'btn btn-primary']);!!}
</div>