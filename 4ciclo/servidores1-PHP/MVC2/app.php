<?php

class App {
	public function __construct(){
		// m recebe o controlador
		// se m == null controlador é o home
		$m = isset($_GET['m']) ? $_GET['m'] : "";//controller
		if($m == null || $m == ""){
			$m = "home";
		}

		// p recebe o metodo
		// se p == null o metodo chamado é o index
		$p = isset($_GET['P']) ? $_GET['P'] : "";// methodo do controller
		if($p == null || $p == ""){
			$p = "index";
		}
		require_once "controller/controller.php";// controlador principal todos os outros iram herdar dele metodos e atributos
		require_once "controller/".$m.".php";// chama a pagina referente ao controller chamado na url
		require_once "library/url.php";// funções para ajudar no manuseio da url
		$ctr = new $m(); // Instanciando o Controlor
		// tecnica variavel variavel
		$ctr->$p(); //Chama o metodo que tiver contido em $m
	}
}//Fim App
session_start();// cookie do servidor
$app = new App();

?>