<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    public function index(){
    	echo "<h3>Lista de Categorias</h3>";
    	echo "<ul>";
    	echo "<li>Alimentos</li>";
    	echo "<li>Eletronicos</li>";
    	echo "<li>Moveis</li>";
    	echo "<li>Informatica</li>";    
    	echo "</ul>";
    	echo "<hr>";

    	if(Auth::check()){
    		$user = Auth::user();
    		echo "<h3>Você está logado! </h3>";
    		echo "<p>ID: " . $user->id . "</p>";
    		echo "<p>Nome: " . $user->name . "</p>";
    		echo "<p>E-mail: " . $user->email . "</p>";
    	}else{
    		echo "<h3> Você não está logado! </h3>";
    	}
    }
}
