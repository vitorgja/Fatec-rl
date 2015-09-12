<?php

class App {
	public function __construct(){
		require_once "home.php";
		$m = $_GET['m'];
		$ctr = new Home(); // Instanciando o Controlor

		// tecnica variavel variavel
		$ctr->$m(); //Chama o metodo que tiver contido em $m
	}
}//Fim App
session_start();// cookie do servidor
$app = new App();

?>