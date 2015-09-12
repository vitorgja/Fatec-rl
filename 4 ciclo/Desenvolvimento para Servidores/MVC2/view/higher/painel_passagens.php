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
<form action="<?= base_url("painel/addVoo")?>" method="post" role="form" class="well">


					<p class="">
						<label>Origem:</label><br>
						<select class="form-control" name="origem">
							<? foreach($estados as $key){ ?>
								<option value="<?= $key->getId(); ?>"><?= $key->getNome(); ?></option>
							<? } ?>
						</select>
					</p>

					<p class="">
						<label>Destino:</label><br>
						<select class="form-control" name="destino">
							<? foreach($estados as $key){ ?>
								<option value="<?= $key->getId(); ?>"><?= $key->getNome(); ?></option>
							<? } ?>
						</select>
					</p>

					<div class="">
					<p>
						<label>Ida:</label>
						<input type="date" name="dataIda" class="form-control" value="dd/mm/aaaa">
					</p>
					</div>

					<div class="">
					<p>
						<label>Volta</label>
						<input type="date" name="dataVolta" class="form-control" value="dd/mm/aaaa">
					</p>
					</div>
				

				<div class="row">
					<div class="col-md-6">
						<label>Quantidade de Adultos:</label>
						<input type="number"class="form-control" name="qtdAdulto" value="">
					</div>

					<div class="col-md-6">
						<label>Quantidade de Crianças:</label>
						<input type="number" class="form-control" name="qtdCrianca" value="">
					</div>
				</div>
				
					<br>

					<div class="itemform direita">	
						<button type="submit" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
					</div>

				</form>

		</div>
		<!-- FIM EDITAR -->
		<!-- SESSÃO CONTENT (CONTEUDO) -->


		<div class="row">
			<div class="col-md-12">

				<div class="page-header">
					<h1>Passagens Aéreas</h1>
				</div>
			</div>


			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">
					Lista de Usuários
					<button id="addVoo" class="navbar-right  btn-sm btn-primary">Adicionar</button>
				</div>

				<!-- Table -->
				<table class="table">
					<tr>
						<th>Origem</th>
						<th>Destino</th>
						<th>Data</th>
						<th>Alterações</th>
					</tr>

					<? foreach($voos as $key){ ?>
					<tr>
						<td><?= $key->getIdOrigem() ?></td>
						<td><?= $key->getIdDestino() ?></td>
						<td><?= $key->getData() ?></td>
						<td>
							<button class="EDITARv btn btn-sm btn-info" value="<?= $key->getId() ?>">editar</button> | 
							<button class="DELETEv btn btn-sm btn-warning" value="<?= $key->getId() ?>">deletar</button>
						</td>
					</tr>
					<? } // fecha o foreach ?>
				</table>
			</div>

		</div>

	<br class="clearfix">
	</div><!-- fecha class container -->
	</main><!-- fecha id #conteudo -->