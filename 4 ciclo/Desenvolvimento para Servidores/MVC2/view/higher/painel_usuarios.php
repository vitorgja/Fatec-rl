<!-- SESSÃO CONTENT (CONTEUDO) -->
	<main id="conteudo">

		<div class="container">

			<!-- EDITAR -->
				<div id="EDITARBG"></div>
				<div id="EDITAR" class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">Editar Usuario
						<div class="">
							<button type="button" class="close panel-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
					</div>
					<form action="<?= base_url("painel/updateusuario") ?>" role="form" class="well" method="post"  enctype="multipart/form-data">
						<p>
							<label for="nome">Nome:</label>
							<input type="text" name="nome" id="nome" title="Nome" class="form-control" placeholder="Nome" size="45" maxlength="40">
						</p>

						<p>
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" title="email" class="form-control" id="" placeholder="email@dominio.com">
						</p>

						<p>
							<label for="login">Login:</label>
							<input type="text" name="login" id="login" title="login" class="form-control" placeholder="Login do Usuario">
						</p>

						<p>
							<label class="form-group" for="senha">Senha:</label>
							<input type="password" name="senha" id="senha" title="senha" class="form-control" placeholder="senha do usuario">
						</p>


						<p>
							<input type="hidden" id="id" name="id" value="">
							<input type="submit" class="btn btn-primary">
							<button id="show-alert-sucess" type="button" class="btn btn-primary" value="Button">Salvar</button>
						</p>

					</form>

				</div>
				<!-- FIM EDITAR -->


			<div class="page-header">
				<h1>Usuários</h1>
			</div>
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">
					Lista de Usuários
					<button id="addUsuario" class="navbar-right  btn-sm btn-primary">Adicionar</button>
				</div>

				<!-- Table -->
				<table class="table">
					<tr>
						<th>Nome</th>
						<th>Login</th>
						<th>Email</th>
						<th>Alterações</th>
					</tr>

					<? foreach($usuarios as $key){ ?>
					<tr>
						<td><?= $key->getNome() ?></td>
						<td><?= $key->getLogin() ?></td>
						<td><?= $key->getEmail() ?></td>
						<td>
							<button class="EDITARu btn btn-sm btn-info" value="<?= $key->getId() ?>">editar</button> | 
							<button class="DELETEu btn btn-sm btn-warning" value="<?= $key->getId() ?>">deletar</button>
						</td>
					</tr>
					<? } // fecha o foreach ?>
				</table>
			</div>
			<br class="clearfix">
		</div><!-- fecha class container -->
	</main><!-- fecha id #conteudo -->