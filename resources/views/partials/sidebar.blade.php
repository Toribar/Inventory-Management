
@yield('sidebar')

<div class="list-group">

	<a href="{{ route('products.index') }}" class="list-group-item {{ Ekko::isActiveRoute('products.index') }}">	Proizvodi
	    <span class="glyphicon glyphicon-list pull-right"></span>
	</a>

	<a href="{{ route('sales.index') }}" class="list-group-item {{ Ekko::isActiveRoute('sales.index') }}">			Prodaja
	    <span class="glyphicon glyphicon-list pull-right"></span>
	</a>

	<a href="{{ route('products.index') }}" class="list-group-item {{ Ekko::isActiveRoute('products.index') }}">	Nabavka
	    <span class="glyphicon glyphicon-list pull-right"></span>
	</a>
	
</div>
		