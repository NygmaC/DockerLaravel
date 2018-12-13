<?php 

/**
 * 
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ClienteControllador extends Controller
{
	public function index() {
		return "Principal";
	}

	public function store(Request $req) {
		$resp = "Armazenar: ";
		$resp .= "Nome: ". $req->input('nome');
		return response($resp, 201);
	}
}