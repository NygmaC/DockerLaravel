<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ URL::to('css/app.css')}}">
	<title></title>
</head>
<body>

	@if(isset($produtos))
		<h1>ARRAY</h1>

		@foreach($produtos as $p)
			<p>Nome do Produto: {{$p}}</p>
		@endforeach
	@else
		<h1>N ARRAY</h1>
	@endif
<script type="text/javascript" src="{{ URL::to('js/app.js')}}"></script>
</body>
</html>