<?php

// => Preparar para o uso de requisições
// => REQUEST
use Illuminate\Http\Request;

//=> GET
Route::get('/', function () {
    return view('welcome');
});

Route::get('/olamundo', function () {
	return "<h1>Ola mundo</h1>";
});


//=> Parametros
Route::get('/nome/{nome}', function ($nome) {
	return "<h1>Ola, $nome!</h1>";
});

Route::get('/seunomecomregra/{nome}/{n}',function ($nome, $n) {
	for($i = 0; $i < $n;$i++){
		echo "Ola $nome ";
	}
})->where('n', '[0-9]+');

Route::get('/seunomecomregranonome/{nome}/{n}',function ($nome, $n) {
	for($i = 0; $i < $n;$i++){
		echo "Ola $nome ";
	}
})->where('n', '[0-9]+')->where('nome', '[a-z]+');

//=> A "?" serve para dizer que o parametro seja opcional
//=> O null e um valor dafault
Route::get('/seunomesemregra/{nome?}',function ($nome=null) {
	echo "Ola $nome ";
});


//=> Agrupamento de Rotas
Route::prefix('app')->group(function () {
	Route::get('/', function () {
		return "Pagina Inicial APP";
	});

	Route::get('profile', function () {
		return "Pagina profile";
	});

	Route::get('about', function () {
		return "About";
	});
});


//=> Redirecionamento
//=> O numero no final e referente ao codigo de retorno HTTP
Route::redirect('/aqui', '/olamundo', 301);

//=> Redirecionando para uma VIEW
Route::get('/retornoview', function () {
	return view('hello');
});

//Route::view('/viewnome', 'retornoviewparametro',
 //['nome' => "Leonardo", 'sobrneome' => "Oliveira"]);

Route::get('/retornoviewparametro/{nome}/{sobrenome}', function ($nome, $sobrenome) {
	return view('/viewparametro', 
	['nome' => $nome, 
	'sobrenome' => $sobrenome]);
});

// => POST
// => Requisição de POST com parametros
//=> Request são os parametros
Route::post('/rest/request', function (Request $req) {
	$nome = $req->input('nome'); //=> Dentro do input vai o nome do NAME que deseja pegar o valor.
	return "hello $nome";
});


//=> DELETE
Route::delete('/rest/delete', function () {

});

// => PUT
Route::put('/rest/put', function () {

});

// => PATCH
Route::patch('/rest/patch', function () {

});

// => OPTIONS
Route::options('/rest/options', function () {

});


// => match
//=> Com o match a rota ira atender mais de uma tipo de requisicao
Route::match(['get', 'post'], '/rest/hello2', function () {
	return "hello2";
});

// => any
//=> Com o any a rota todo tipo de requisicao
Route::any('/rest/hello3', function () {
	return "hello3";
});


// => Nomeando rotas
// => O noma e a referencia da rota na aplicacao, e como o id de uma rota
Route::post('/app/produtos', function () {
	return "meus produtos";
})->name('meusprodutos');

Route::get('/linkprodutos', function () {
	// => Pega o nome de uma outrs rots
	$url = route('meusprodutos');
});



// ROTAS APONTANDO PARA CONTROLLER
Route::get('/nomecontroller', 'MeuControllador@getNome');

// => Passando parametro para controller
Route::get('/calcontroller/{n1}/{n2}', 'MeuControllador@calculaMultiplicacao');

Route::get('/cliente', 'ClienteControllador@index');

Route::post('/cliente', 'ClienteControllador@store');

















