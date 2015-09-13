<?php
	require_once 'fibonacci.php';
	$fibonacci = new Fibonacci();

	// N1 recebe um numero pela URL
	$numero = isset($_GET['numero'])? $_GET['numero'] : '';
	echo $fibonacci->fibonacci($this->fib);
?>