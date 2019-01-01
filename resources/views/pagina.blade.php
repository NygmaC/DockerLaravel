<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	<title></title>
</head>
<body>
	<script type="text/javascript" src="{{ asset('js/app.css')}}"></script>

	@component('components.meucomponente')
		@slot('titulo')
			Erro fatal: 
		@endslot
		<strong> Erro: </strong>
	@endcomponent

	@component('components.meucomponente', ['tipo' => 'danger',
	'titulo' => testando 
	])
</body>
</html>