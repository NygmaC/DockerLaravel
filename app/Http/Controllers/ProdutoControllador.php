<?php 

/**
 * 
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControllador extends Controller
{
	
	public function listar() {
		$produtos = [
			'notebook',
			'mouse',
			'teclado',
			'monitor'
		];

		return view('produtos', ['produtos' => $produtos]);
	}

	public function secaoprodutos($palavra) {

		return view('sessaoprodutos', ['palavra' => $palavra]);
	}

	public function opcoesprodutos($opcao) {
		return view('opcoes','opcao' => $opcao )
	}
}