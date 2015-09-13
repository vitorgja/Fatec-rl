<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>

	<body>

		<header>
			<h1>Logado</h1>

			<nav>
				<ul>
					<li><a href="<?= base_url('home/admin/'); ?>">Inicio</a></li>
					<li><a href="<?= base_url('home/cadastrar/'); ?>">Cadastrar</a></li>
					<li><a href="<?= base_url('home/listar/'); ?>">Listar</a></li>

				</ul>
			</nav>

			<nav>
				<ul>
					<li><?= $login ?></li>
					<li><?= $nome ?></li>
					<li><a href="<?= base_url('home/login/')?>">Sair</a></li>
				</ul>
			</nav>
		</header>

