<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function index(){
    	echo "<h3>Lista de Produtos</h3>";
    	echo "<ul>";
    	echo "<li>Macarão</li>";
    	echo "<li>Feijão</li>";
    	echo "<li>Carne Bovina</li>";
    	echo "<li>Tomate</li>";
    	echo "<li>Café</li>";
    	echo "</ul>";
    }
}
