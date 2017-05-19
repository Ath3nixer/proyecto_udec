<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ejemplo | @yield('title')</title>
		{!! Html::style('css/bootstrap.min.css') !!}
	</head>
	<body>
	<div class="row">
		@yield('content')
		
	</div>

	</body>
</html>