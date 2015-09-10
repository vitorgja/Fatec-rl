<main id="conteudo">
	<div class="container">

	<!-- SESSÃO CONTENT (CONTEUDO) -->
	
	
		<div class="row">
			<div class="col-md-12">
				
				<div class="page-header">
					<h1>Passagens Aéreas</h1>
				</div>
				
				
				<form action="<?= base_url("home/search")?>" method="post" role="form" class="well">

					<div id="esquerda">
  						<label>
  						<input type="radio" name="opcIdaVolta" id="ida-volta" value="ida-volta">Ida e Volta
   						</label>
					</div>

					<div id="direita">
 				 		<label>
 				 		<input type="radio" name="opcIdaVolta" id="ida" value="ida">Só Ida
    					</label>
					</div>

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
						<input type="date" name="dataIda" value="dd/mm/aaaa">
					</p>
					</div>

					<div class="">
					<p>
						<label>Volta</label>
						<input type="date" name="dataVolta" value="dd/mm/aaaa">
					</p>
					</div>
				

				<div class="row">
					<div class="col-md-6">
					<label>Adultos:</label>
					<select class="form-control">
  						<option>1</option>
  						<option>2</option>
  						<option>3</option>
  						<option>4</option>
  						<option>5</option>
					</select>
					</div>

					<div class="col-md-6">
					<label>Crianças:</label>
					<select class="form-control">
  						<option>1</option>
  						<option>2</option>
  						<option>3</option>
  						<option>4</option>
  						<option>5</option>
					</select>
					</div>
				</div>
				
					<br>

					<div class="itemform direita">	
						<button type="submit" class="btn btn-primary" value="Pequisar">Pesquisar</button>
					</div>

				</form>
			</div>
		</div>

	<br class="clearfix">
	</div><!-- fecha class container -->
	</main><!-- fecha id #conteudo -->