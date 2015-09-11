<?php
	// inclui no documento a pagina que contem a Classe Fibonacci
	require_once 'fibonacci.php';

	// Instancia um novo Objeto da Classe Fibonacci
	$fibonacci = new Fibonacci();

	// verifica se chego o numero  para que
	//possa ser chamado o metodo "fibonacci(numero)" da Classe Fibonacci
	$numero = isset($_POST['numero'])? $_POST['numero'] : '';

	// mostra na tela o resultado do metodo "fibonacci(numero)" da Classe Fibonacci
	echo $fibonacci->fibonacci($numero);
?>