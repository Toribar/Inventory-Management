
@yield('sidebar')

<div class="list-group">
	<a href="{{ route('new_day.index') }}" class="list-group-item {{ Ekko::isActiveRoute('new_day.index') }}">	Novi Dan
	    <span class="glyphicon glyphicon-list pull-right"></span>
	</a>
	<a href="{{ route('transactions.index') }}" class="list-group-item {{ Ekko::isActiveRoute('transactions.index') }}">
		Lista Popisa
	    <span class="{{ Ekko::isActiveRoute('home') }} glyphicon glyphicon-glass pull-right"></span>
	</a>
	<a href="#" class="list-group-item">
		Ulaz
	    <span class="{{ Ekko::isActiveRoute('home') }} glyphicon glyphicon-usd pull-right"></span>
	</a>
	<a href="{{ route('products.index') }}" class="list-group-item {{ Ekko::isActiveRoute('products.index') }}">	Svi Artikli
	    <span class="glyphicon glyphicon-list pull-right"></span>
	</a>
	
</div>
