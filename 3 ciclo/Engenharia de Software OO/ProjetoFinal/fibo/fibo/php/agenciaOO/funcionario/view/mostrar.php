<!-- DOCTYPE HTML>
 <html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Trabalho de Engenharia de Software - Dados Usuario Cadastrado</title>
		<link rel="stylesheet" href="view/css/layout.css">
		<script src="view/js/include/jquery-1.11.3.js"></script>
		<script src="view/js/script.js"></script>
	</head>
	<body>
		<header>
			<div>
				<h1>Trabalho de Orientação a Objeto</h1>
			</div>
		</header>
		<main>
			<div>
				<h2>Dados do Usuário Cadastrado</h2>
			-->
				<table class="tabela">

					<tr>
						<th>Nome:</th>
						<td><?php  echo $candidato['nome']?></td>
					</tr>
					<!--
					<tr>
						<th>Sexo:</th>
						<td><?php  echo $candidato['sexo']?></td>
					</tr>
					<tr>
						<th>Idade:</th>
						<td><?php  echo  $candidato['idade']?> anos</td>
					</tr>
					<tr>
						<th>Salario:</th>
						<td><?php  echo  $candidato['salario']?> R$</td>
					</tr>
					-->
					<tr>
						<th>Profissao:</th>
						<td><?php  echo  $candidato['profissao']?></td>
					</tr>
				</table>
				
				<!--
			</div>
		</main>
		<footer>
			<div>
				<h3>Integrantes</h3>
				<p>Andressa Miki | Diandra | Sandra | Victor | Vitor Pereira </p>	
			</div>
		</footer>
	</body>
</html>
-->