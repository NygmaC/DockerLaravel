<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

