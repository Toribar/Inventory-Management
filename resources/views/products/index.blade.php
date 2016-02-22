@extends('layouts.master')

@section('content')
	<table class="table">
		<tr>
			<th>Artikl</th>
			<th>Kupovna cena</th>
			<th>Prodajna cena</th>
			<th>Stanje na lageru</th>
		</tr>

		@foreach($products as $product)
			<tr>
				<td>{{ $product->name }}</td>
				<td>{{ $product->purchase_price }}</td>
				<td>{{ $product->sell_price }}</td>
				<td>{{ $product->transactions()->sum('quantity') }}</td>
			</tr>
		@endforeach
	</table>
@stop
