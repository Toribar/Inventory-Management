
@yield('sidebar')

<div class="list-group">

	<a href="{{ route('products.index') }}" class="list-group-item {{ Ekko::isActiveRoute('products.index') }}">	Proizvodi
	    <span class="glyphicon glyphicon-glass pull-right"></span>
	</a>

	<a href="{{ route('workdays.index') }}" class="list-group-item {{ Ekko::isActiveRoute('workdays.index') }}">	Popis
    	<span class="glyphicon glyphicon-list pull-right"></span>
	</a>

	<a href="{{ route('sales.index') }}" class="list-group-item {{ Ekko::isActiveRoute('sales.index') }}">Lista Završenih Popisa
	    <span class="glyphicon glyphicon-usd pull-right"></span>
	</a>

	<a href="{{ route('purchase.index') }}" class="list-group-item {{ Ekko::isActiveRoute('purchase.index') }}">	Nabavka
	    <span class="glyphicon glyphicon-arrow-up pull-right"></span>
	</a>
	
	
</div>
		