@extends('layouts.master')
@section('content')

<div class="panel panel-default">
	<div class="panel-heading text-center">
		<h3>Lista svih popisa</h3>
	</div>

	<div class="panel-body">
		
			@foreach ($workdays as $workday)
				<div class="list-group">
					<a href="{{ route('workdays.show', [$workday->id]) }}" class="list-group-item"><h4>{{ $workday->created_at->format('Y.m.d') }}</h4></a>
				</div>
			@endforeach
		
		{{ $workdays->render() }}
	</div>
</div>

@stop