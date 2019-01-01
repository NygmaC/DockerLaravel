<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ URL::to('css/app.css')}}">
	<title></title>
</head>
<body>

	@hasSection('minha_sessaoprodutos')
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"> Produtos</h5>

			<p class="card-text">
				@yield('minha_sessaoprodutos')			
			</p>

			<a href="#" class="card-link">Informações</a>
			<a href="#" class="card-link">Ajuda</a>
		</div>
	</div>

	@endif
<script type="text/javascript" src="{{ URL::to('js/app.js')}}"></script>
</body>
</html>