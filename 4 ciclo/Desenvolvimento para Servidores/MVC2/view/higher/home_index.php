<div class="container">

	<!-- SESSÃO CONTENT (CONTEUDO) -->
	<main id="conteudo" class="home">

		<!-- banner -->
		<div id="banner">
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<br>
					<h2>Buenos Aires, Miame e Orlando</h2>
					<p>Pelos melhores preços. Tudo com desconto como você nunca viu antes!</p>
					<p>
						<br><a href="pacotes.html" class="btn btn-primary btn-sm">Venha conferir</a>
					</p>
				</div>
			</div>
		</div>


		<!-- chamadas -->
		<br>
		<br>
		<br>
		<p class="lead text-center">
			Aqui você encontra passagens em promoção para destinos em todo o mundo. 
			Planeje aquela viagem tão desejada.
		</p>
		<br>
		<br>

		<div id="chamadas" class="text-center">

			<div class="row">
				<article class="col-md-4">
					<a href="<?= base_url("home/empresa")?>" class="thumbnail">
						<img src="<?= base_url("view/".$this->tema."/")?>image/empresa.jpg">
						<h3>Empresa</h3>Saiba um pouco sobre o nosso objetivo como empresa.
					</a>
				</article>
				<article class="col-md-4">
					<a href="<?= base_url("home/passagens")?>" class="thumbnail">
						<img src="<?= base_url("view/".$this->tema."/")?>image/aviao1.jpg">
						<h3>Passagens Aéreas</h3>As passagens aéreas mais baratas do Brasil.
					</a>
				</article>
				<article class="col-md-4">
					<a href="<?= base_url("home/fale")?>" class="thumbnail">
						<img src="<?= base_url("view/".$this->tema."/")?>image/atendente.jpg">
						<h3>Fale conosco</h3>Mande sua mensagem, crítica, elogio ou sugestão.
					</a>
				</article>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>

	</main><!-- fecha id #conteudo -->

</div><!-- fecha class container -->