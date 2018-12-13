<?php 

/**
 * 
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MeuControllador extends Controller
{
	public function getNome() {
		return "Leonardo Crispin de Oliveira"; 
	} 

	public function calculaMultiplicacao($n1, $n2) {
		return $n1 * $n2;
	}
}