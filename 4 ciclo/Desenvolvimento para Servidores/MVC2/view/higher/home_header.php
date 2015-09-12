<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="<?= base_url("view/".$this->tema."/css/bootstrap.min.css")?>">
	<link rel="stylesheet" href="<?= base_url("view/".$this->tema."/css/estilo.css")?>">
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
						<li><a href="<?= base_url("home/")?>">Página Inicial</a></li>
						<li><a href="<?= base_url("home/empresa")?>">Empresa</a></li>
						<li><a href="<?= base_url("home/passagens")?>">Passagens Aéreas</a></li>
						<li><a href="<?= base_url("home/pacotes")?>">Promoções</a></li>						
						<li><a href="<?= base_url("home/fale")?>">Fale Conosco</a></li>	
						<li><a href="<?= base_url("home/login")?>">Administração</a></li>	
					</ul>
				</div>
			</div>
		</div>
	</nav>