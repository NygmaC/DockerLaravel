<?php 
// => Preparar para o uso de requisições
// => REQUEST
use Illuminate\Http\Request;

//=> GET
Route::get('/', function () {
    return view('pagina');
});


Route::get('/ola', function() {
	$ArrayParametros =  array('nome' => 'Leonardo',
	'sobrenome' => 'oliveira' );;
	return view('minhaview', $ArrayParametros);
});

//Verificando se a VIEW existe 
Route::get('/testeview', function() {
	if(View::exists('email')){
		return view('email');
	}else{
		return view('erro');
	}
});

Route::get('/filho', function() {
	return view('filho');
});

Route::get('/produtos', 'ProdutoControllador@listar');

Route::get('/secaoprodutos/{palavra}', 'ProdutoControllador@secaoprodutos');

Route::get('/opcoes/{opcao}', 'ProdutoControllador@opcoesprodutos');

Route::get('/loopfor/{n}', 'ProdutoControllador@loopfor');

Route::get('/foreach', 'ProdutoControllador@foreach');