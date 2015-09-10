<html>

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
					<li><?= $usuario->getLogin() ?></li>
					<li><?= $usuario->getNome() ?></li>
					<li><a href="<?= base_url('home/login/')?>">Sair</a></li>
				</ul>
			</nav>
		</header>

	</body>
</html>