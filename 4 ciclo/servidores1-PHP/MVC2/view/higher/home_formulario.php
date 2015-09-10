<!-- SESSÃO CONTENT (CONTEUDO) -->
	<main id="conteudo">
	<div class="container">
	
		<div class="row">
			<div class="col-md-12">
 
				<div class="page-header">
					<h1>Administraçao</h1>
				</div>

					<h5>Digite o login e a senha para ter acesso a area de Administrçao.</h5>

	
						<div id="alertS" class="alert alert-success text-center hidden"><b>Obrigado!</b><br>Sua mensagem foi enviada com sucesso, em breve responderemos.</div>
                  		<div id="alertE" class="alert alert-danger text-center hidden"><b>Desculpe!</b><br>Sua mensagem não foi enviada com sucesso, tente novamente.</div>
 
                  		<form role="form" class="well" action="<?= base_url('home/auth/');?>" method="POST">
							<p>
								<label for="Login">Login:</label>
								<input type="text" name="lo" id="Login" title="Login" class="form-control" placeholder="Login" size="45" maxlength="40">
							</p>
 
							<p>
								<label for="senha" >Senha:</label>
								<input type="password" name="se" id="senha" title="Senha" class="form-control" placeholder="Senha">
							</p>

							<p>
								<input type="submit"  value="Logar" id="show-alert-sucess" class="btn btn-primary">
								<!--
									<button id="show-alert-sucess" type="button" class="btn btn-primary" value="enviar">Logar</button>
								-->
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