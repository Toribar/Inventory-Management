@extends('layouts.master')
@section('content')

{{ Form::model(['route' => 'products.edit']) }}
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

@stop