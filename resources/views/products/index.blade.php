@extends('layouts.master')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center">Artikli</h2>
	</div>
	<div class="panel-body">
		<table class="table	table-bordered">
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
					<td>@{{ $product->getQuantity() }}</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>

{{ $products->render() }}

<hr>

<div class="col-md-4">
	{{ Form::model(['route' => 'products.index']) }}
		<div class="form-group">
			<label>Ime proizvoda: </label>
			{{ Form::text('name', null, ['class' => 'form-horizontal pull-right', 'autocomplete' => 'off']) }}
		</div>

		<div class="form-group">
			<label>Kupovna cena: </label>
			{{ Form::number('purchase_price', null, ['class' => 'form-horizontal pull-right', 'autocomplete' => 'off']) }}
		</div>

		<div class="form-group">
			<label>Prodajna cena: </label>
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
