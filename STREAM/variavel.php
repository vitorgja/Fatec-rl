<?php
	/**
	*	Variaveis: String, Int, Boolean
	*/
	$title = "Olá Mundo";
	$h1 = "Live Stream";
	$nome = "Vitor Pereira";
	$idade = 23;

	$vOuF = true; // mostra  na tela 1
	//$vOuF = false; // não vai nada mostra na tela
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title> <?= $title ?> </title>
	</head>
	<body>
		<h1> <?= $h1 ?> </h1>
		<p> 
			nome: <?= $nome ?>
			<br>
			idade: <?= $idade ?>
			<br>
			V ou F: <?= $vOuF ?>
		</p>
	</body>
</html>