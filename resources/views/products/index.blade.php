	@extends('layouts.master')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center">Artikli</h2>
	</div>
	<div class="table-responsive">
		<table class="table	table-bordered">
			<tr>
				<th>Artikl</th>
				<th>Nabavna cena</th>
				<th>Prodajna cena</th>
				<th>Stanje na lageru</th>
			</tr>

			@foreach($products as $product)
				<tr>
					<td><a href="">{{ $product->name }}</a></td>
					<td>{{ $product->getPurchasePrice() }}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->getStockQuantity() }}</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>

{{ $products->render() }}

<hr>

<div class="col-md-4">
	{{ Form::model(['route' => 'products.store']) }}
		<div class="form-group">
			<label>Ime proizvoda: </label>
			{{ Form::text('name', null, ['class' => 'form-horizontal pull-right', 'autocomplete' => 'off']) }}
		</div>

		<!-- <div class="form-group">
			<label>Kupovna cena: </label>
			{{ Form::number('purchase_price', null, ['class' => 'form-horizontal pull-right', 'autocomplete' => 'off']) }}
		</div> -->

		<div class="form-group">
			<label>Cena: </label>
			{{ Form::number('sell_price', null, ['class' => 'form-horizontal pull-right', 'autocomplete' => 'off']) }}
		</div>
		<button class="btn btn-primary" type="submit">Dodaj</button>
	{{ Form::close() }}

	@if(count($errors))
		@foreach($errors->all() as $error)
			<div class="alert" role="alert"><p>{{ $error }}</p></div>
		@endforeach
	@endif
</div>

@stop
