<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="<?= base_url("view/".$this->tema."/css/bootstrap.min.css")?>">
	<link rel="stylesheet" href="<?= base_url("view/".$this->tema."/css/estilo.css")?>">
		<!-- Scripts -->

	<script src="<?= base_url("view/".$this->tema."/")?>js/jquery-1.10.2.min.js"></script>
	<script src="<?= base_url("view/".$this->tema."/")?>js/bootstrap.min.js"></script>
	<script>
		function base_url(parametro){
			if(parametro=="" || parametro==null){
				return "<?= base_url() ?>";
			}else{
				var aux = "<?= base_url() ?>"+parametro;
				return aux;
			}
		}
		function redirect(parametro){
			if(parametro=="" || parametro==null){
				window.location.assign(base_url());
			}else{
				window.location.assign(base_url(parametro));
			}
		}
	</script>
	<script src="<?= base_url("view/".$this->tema."/")?>js/main.js"></script>
	<script src="<?= base_url("view/".$this->tema."/")?>js/bg-move.js"></script>
</head>
<body>

<div class="container">

	<!-- SESSÃO HEADE (TOPO) -->
	<header id="topo">
		<div class="row">
			<div class="col-md-12 pull-left">
				<a href="<?= base_url("view/".$this->tema."/")?>index.html">
					<img src="<?= base_url("view/".$this->tema."/")?>image/logo.png"  alt="logo da empresa" class="logo">
					<img src="<?= base_url("view/".$this->tema."/")?>image/logotipo.png" alt="logotipo" id="logotipo" class="">
				</a>
			</div>
    	</div>
	</header>
	</div>

	<!-- SESSÃO NAV (NEVAGEÇÃO PRINCIPAL) -->
	<nav id="nav" class="blue" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-pills pull-right">
						<li><a href="<?= base_url("painel/")?>">Página Inicial</a></li>
						<li><a href="<?= base_url("painel/usuarios")?>">Usuarios</a></li>
						<li><a href="<?= base_url("painel/passagens")?>">Passagens</a></li>
						<li><a href="<?= base_url("painel/pacotes")?>">Pacotes</a></li>						
						<li><a href="<?= base_url("painel/fale")?>">Fale Conosco</a></li>		
						<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<?= $login ?><!-- Usuario -->
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="<?= base_url("painel/logout")?>">Sair</a></li>
							</ul>
						</li>

					</ul>
				</div>	

			</div>
		</div>
	</nav>