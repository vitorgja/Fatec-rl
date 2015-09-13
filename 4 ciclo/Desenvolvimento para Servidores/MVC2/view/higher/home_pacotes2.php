<!-- SESSÃO CONTENT (CONTEUDO) -->
	<main id="conteudo">

	<div class="container">
	<div class="page-header">
		<h1>Promoções</h1>
	</div>

	<?
	$i=0;
	foreach($pacotes as $key){ 
		if($i==0){echo '	<div class="row">';}
	?>
				<div class="col-md-4">
					<img src="<?= base_url("view/".$key->getImage() )?>" alt="<?= $key->getNome() ?>">
					<p>
						<h4><?= $key->getNome() ?></h4>
						<?= $key->getDescricao() ?>
					</p>
					<p>
						<strong><?= $key->getPagamento() ?></strong>
					</p>
					<p>
						<br><a href="<?= base_url("home/pacotes")?>" class="btn btn-primary btn-sm">Compre Agora.</a>
					</p>
				</div>
	<?
		$i++;
		if($i==3){echo '	</div>';$i=0;}
	} // fim foreach 
	?>

	<br class="clearfix">
	</div><!-- fecha class container -->
	</main><!-- fecha id #conteudo -->