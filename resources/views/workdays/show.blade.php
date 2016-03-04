@extends('layouts.master')
@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Popis za dan {{ $workday->started_at->format('d.m.Y') }}</h3>
	</div>

	<div class="panel-body">
		<p> Ukupna vrednost prodatih dobara je: 8000.00 dinara (hardkodovano)</p>
		<p> Ukupan profit je: 3000.00 (hardkodovano) </p>
	</div>
</div>

@stop