<!DOCTYPE HTML>
 <html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Trabalho de Engenharia de Software - Resultado</title>
	</head>
	<body>
<?php
$nome="";
$sexo="";
$pretensao="";
$idade="";
$profissao="";
$nm_profissao="";
if(isset($_POST["nome"])){
	$nome=$_POST["nome"];
}
if(isset($_POST["sexo"])){
	$sexo=$_POST["sexo"];
}
if(isset($_POST["pretensao"])){
	$pretensao=$_POST["pretensao"];
}
if(isset($_POST["idade"])){
	$idade=$_POST["idade"];
}
if(isset($_POST["profissao"])){
	$profissao=$_POST["profissao"];	
	if($profissao=="1"){
		$nm_profissao="Cartógrafo";
	}elseif($profissao=="2"){
		$nm_profissao="Assistente Social";
	}elseif($profissao=="3"){
		$nm_profissao="Psicólogo";
	}elseif($profissao=="4"){
		$nm_profissao="Atendente";
	}elseif($profissao=="5"){
		$nm_profissao="Secretária Bilíngue";
	}elseif($profissao=="6"){
		$nm_profissao="Geólogo";
	}else{
		$nm_profissao="";
	}
}
?>
		<p>Nome do candidato: <?=$nome?></p>
		<!--p>Sexo: <?=$sexo?></p>
		<p>Pretensão salarial: <?=$pretensao?></p>
		<p>Idade: <?=$idade?></p-->
		<p>Profissão: <?=$nm_profissao?></p>
	</body>
</html>