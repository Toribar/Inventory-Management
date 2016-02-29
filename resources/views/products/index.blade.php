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
				<td>{{ $product->getQuantity() }}</td>
			</tr>
		@endforeach
	</table>

	{{ $products->render() }}

	<hr>

	{{ Form::model(['route' => 'products.index']) }}
		<div class="form-group">
			<label>Ime proizvoda</label>
			{{ Form::text('name', null, ['class' => 'form-horizontal']) }}
		</div>

		<div class="form-group">
			<label>Kupovna cena</label>
			{{ Form::text('purchase_price', null, ['class' => 'form-horizontal']) }}
		</div>

		<div class="form-group">
			<label>Prodajna cena</label>
			{{ Form::text('sell_price', null, ['class' => 'form-horizontal']) }}
		</div>
		<button class="btn btn-primary" type="submit">Dodaj</button>
	{{ Form::close() }}

	<!-- {{ Form::open(['route' => 'transactions.index']) }}
		<div class="form-group">
			<label>Artikl</label>
			{{ Form::select('product_id', $products->pluck('name', 'id'), null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			<label>Količina</label>
			{{ Form::text('quantity', null, ['class' => 'form-control']) }}
		</div>

		<button type="submit" class="btn btn-primary" name="direction" value="in">Ulaz</button>
		<button type="submit" class="btn btn-primary" name="direction" value="out">Izlaz</button>
	{{ Form::close() }} -->
@stop
