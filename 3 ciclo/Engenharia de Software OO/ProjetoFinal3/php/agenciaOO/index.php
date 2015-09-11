<?php
	// verifica se chego nome,sexo,idade,salario e profissão para que
	//possa ser criado o novo Objeto da Classe Candidato
	if(isset($_POST['nome']) == 1 && isset($_POST['sexo']) == 1 && isset($_POST['idade']) == 1 && isset($_POST['salario']) == 1 && isset($_POST['profissao']) == 1 ){
	 	$nome = $_POST['nome'];
	 	$sexo = $_POST['sexo'];
		$idade = $_POST['idade'];
		$salario = $_POST['salario'];
		$profissao = $_POST['profissao'];
	}

	// inclui no documento a pagina que contem a Classe Candidato
	require_once "candidato.php";

	// Instancia um novo Objeto do Tipo Candidato
	$candidato = new Candidato($nome,$sexo,$idade,$salario,$profissao);

	// Chama o metodo mostrar do Objeto Candidato
	$candidato->mostrar();
?>