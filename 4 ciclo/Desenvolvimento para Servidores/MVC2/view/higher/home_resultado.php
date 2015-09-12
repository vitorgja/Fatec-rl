<!-- SESSÃO CONTENT (CONTEUDO) -->
	<main id="conteudo">

		<div class="container">

			<div class="page-header">
				<h1>Resultado da busca</h1>
			</div>
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">
					aaa
				</div>
				
				<div class="panel">
  					<div class="panel-body">

						<? foreach($estados as $key){ 
							 //var_dump($key);
						} ?>
						<? foreach($resultado['ida'] as $result){

							foreach($result as $key){ ?>
								<? print_r($key);?>
								<div class="col-xs-12 col-md-2">
									<p>Ida</p>
								</div>
								<div class="col-xs-12 col-md-5">
									<p>Origem: <?= $key->getIdOrigem() ?></p>
								</div>
								<div class="col-xs-12 col-md-5">
									<p>Destino: <?= $key->getIdDestino() ?></p>
								</div>

							<? }

						} ?>

						<? foreach($resultado['volta'] as $result){
								var_dump($result);
							/*
							foreach($result as $key){ ?>
								<div class="col-xs-12 col-md-5">
									<p>Nome: <?= $key['voo']-> getIdOrigem() ?>
								</div>
								echo "VOO: ";
								echo $key['voo']->getData();

							<? }
							*/
						} ?>
				 	</div>
				</div>
			</div>
			<br class="clearfix">
		</div><!-- fecha class container -->
	</main><!-- fecha id #conteudo -->