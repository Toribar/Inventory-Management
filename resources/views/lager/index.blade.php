@extends ('layouts.master')
@section('content')

<div class="panel-default">
    <div class="panel-heading">
        <h4>Artikli</h4>
    </div>

    <div class="panel-body">
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Ime Proizvoda</td>
                        <td>Kolicina</td>
                        <td>Nabavna Cena</td>
                        <td>Prodajna Cena</td>
                        <td>Ukupna Cena</td>
                        <td>Profit</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                        <tr>
                            <td>{{ $p->name }} </td>
                            <td>{{ $p->purchase_price }} </td>
                            <td>{{ $p->sell_price }} </td>
                            <td>ukupno prodato </td>
                            <td>profit </td>
                        </tr>
                    {@endforeach
                </tbody>
            </table>
            <br>
            
	        <form action="/lager/" method="POST">   
	        	<input type="text" name="name"></input>

	        	<input type="submit" class="btn btn-primary"> 
	        </form>
    </div>
</div>

@stop