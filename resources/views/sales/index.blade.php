@extends('layouts.master')
@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Lista svih popisa</h3>
	</div>

	<div class="panel-body">
		<ul>
			@foreach ($workdays as $workday)
				<li>
					<a href="#">{{ $workday->created_at }}</a>
				</li>
			@endforeach
		</ul>
		{{ $workdays->render() }}
	</div>
</div>

@stop