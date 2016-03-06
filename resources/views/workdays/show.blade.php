@extends('layouts.master')
@section('content')

<div class="panel panel-default">

	<div class="table-responsive">
		<table class="table	table-bordered">
			<tr>
				<th>Artikl</th>
				<th>Kolicina</th>
				<th>Cena</th>
				<th>Ukupno</th>
			</tr>

			@foreach($workday->sales as $sale)
				<tr>
					<td>{{ $sale->product->name }}</td>
					<td>{{ $sale->quantity }}</td>
					<td>{{ $sale->price }}</td>
					<td>{{ number_format($sale->quantity * $sale->price, 2) }}</td>
				</tr>
			@endforeach
				<tr>
					<td colspan="3"></td>
					<td>{{ number_format($workday->getSalesTotal(),2, '.', ',') }}</td>
				</tr>
		</table>
	</div>
	<br>
	<h5>Ukupan profit za   {{ $workday->closed_at->format('d.m.Y') }}   je {{ $workday->getProfit() }}</h5>
</div>

<a href="{{ route('sales.index') }}" class="btn btn-info"> Nazad na Listu</a>
@stop