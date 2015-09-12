<!-- SESSÃO CONTENT (CONTEUDO) -->
	<main id="conteudo">
	<div class="container">
	
		<div class="row">
			<div class="col-md-12">
 
				<div class="page-header">
					<h1>Fale Conosco</h1>
				</div>
	
					<h5> Preencha o formulário abaixo e mande sua mensagem, crítica, elogio ou sugestão.</h5>
 
	
						<div id="alertS" class="alert alert-success text-center hidden"><b>Obrigado!</b><br>Sua mensagem foi enviada com sucesso, em breve responderemos.</div>
                  		<div id="alertE" class="alert alert-danger text-center hidden"><b>Desculpe!</b><br>Sua mensagem não foi enviada com sucesso, tente novamente.</div>
 
                  		<form action="<?= base_url("home/submitfale")?>" method="post" role="form" class="well">
							<p>
								<label for="nome">Nome:</label>
								<input type="text" name="nome" id="nome" title="Nome" class="form-control" placeholder="Nome" size="45" maxlength="40">
							</p>

							<p>
								<label for="telefone" >Telefone:</label>
								<input type="tel" name="telefone" id="telefone" title="Telefone" class="form-control" placeholder="(ddd) 00000000">
							</p>

							<p>
								<label for="cidade">Cidade:</label>
								<input type="text" name="cidade" id="cidade" title="Cidade" class="form-control" placeholder="Cidade">
							</p>

							<p>
								<label class="form-group" for="email">E-mail:</label>
								<input type="email" name="email" id="email" title="email" class="form-control" id="Email1" placeholder="digite seu e-mail">
							</p>

							<p>
								<label for="assunto">Assunto:</label>
								<select class="form-control" name="assunto">
									<option value="0">Selecione o Assunto</option>
  									<option value="recla">Reclamação</option>
  									<option value="suges">Sugestão</option>
  									<option value="inf">Informação</option>
  									<option value="elog">Elogio</option>
  								</select>
							</p>

							<p>
								<label for="mensagem">Escreva a sua mensagem:</label>
								<textarea class="form-control"name="mensagem" id="mensagem" title="Mensagem" rows="3"></textarea>
							</p>	

							<p>
								<button id="show-alert-sucess" type="submit" class="btn btn-primary" value="enviar">Enviar</button>			
							</p>

						</form>
 
			</div>
		</div>
 
		<div class="row">  
			<div class="col-md-12">
 
				<h4 class="text-center well">Ou entre em contato conosco atraves do número:  2525-3059</h4>
 
		   </div>
		 </div>		
 
	
	<br class="clearfix">
	</div><!-- fecha class container -->
	</main><!-- fecha id #conteudo -->