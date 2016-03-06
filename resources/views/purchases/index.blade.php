@extends('layouts.master')
@section('content')

{{ Form::open(['route' => 'purchase.store'], ['class' => 'form-inline']) }}
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="text-center">Unos na Lager</h3>
		</div>

		<div class="panel-body">
			<div class="form-group col-md-4">
		        <label>Artikl</label>
		        <strong>
		        	{{ Form::select('product_id', $products->pluck('name', 'id'), null, ['class' => 'form-control']) }}
		    	</strong>
		    </div>

		    <div class="form-group col-md-4">
		        <label>Količina</label>
		        <strong>
		        	{{ Form::number('quantity', 10, ['class' => 'form-control', 'autocomplete' => 'off']) }}
		    	</strong>
		    </div>

		    <div class="form-group col-md-4">
		        <label>Cena</label>
		        <strong>
		        	{{ Form::number('price', null, ['class' => 'form-control', 'autocomplete' => 'off']) }}
		    	</strong>
		    </div>

		    <!-- <button type="submit" class="btn btn-primary" name="direction" value="in">Ulaz</button> -->
		</div>
	</div>
	<button type="submit" class="btn btn-primary" name="direction" value="out">Unesi</button>
{{ Form::close() }}
@stop