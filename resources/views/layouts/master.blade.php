<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.6/slate/bootstrap.min.css">

		<style type="text/css">
			body { padding-top: 70px; }

		</style>

		<title>Colaculator</title>
	</head>

	<body>
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					@include('partials.sidebar')
				</div>
				<div class="col-md-9 col-offset-1">
					@yield('content')
				</div>
			</div>
			<hr>
				@include('partials.footer')
		</div>
	</body>
</html>
