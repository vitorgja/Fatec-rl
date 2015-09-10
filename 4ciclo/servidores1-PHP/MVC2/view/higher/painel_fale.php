<!-- SESSÃO CONTENT (CONTEUDO) -->
	<main id="conteudo">

		<div class="container">

			<div class="page-header">
				<h1>Fale Conosco</h1>
			</div>
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">
					Fale Conosco
				</div>
				
				<div class="panel panel-default">
  					<div class="panel-body">
				<? foreach($contatos as $key){ ?>
						<div class="row linha">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-12 col-md-5"><p>Nome: <?= $key->getNome() ?></div>
										<div class="col-xs-6 col-md-6">Data: <?= $key->getData() ?></div>
										<div class="col-xs-6 col-md-1">
											<button class="DELETEfc btn btn-sm btn-warning" value="<?= $key->getId() ?>">deletar</button>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="row">
									<div class="col-xs-6 col-md-4">
										<p>
											<strong>Telefone:</strong> <?= $key->getTelefone() ?><br>
											<strong>Cidade:</strong> <?= $key->getCidade() ?><br>
											<strong>Email:</strong> <?= $key->getEmail() ?>
										</p>
									</div>
									<div class="col-xs-6 col-md-5">
										<p>
											<strong>Assunto:</strong> <?= $key->getAssunto() ?><br>
											<strong>Mensagem:</strong> <?= $key->getMensagem() ?><br>
										</p>
									</div>
									</div>
								</div>


							</div>
						</div>
				<? } // fecha o foreach ?>
				 	</div>
				</div>
			</div>
			<br class="clearfix">
		</div><!-- fecha class container -->
	</main><!-- fecha id #conteudo -->