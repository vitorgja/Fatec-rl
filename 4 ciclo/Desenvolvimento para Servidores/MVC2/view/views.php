<?php
	class Views {
    	protected $data;
		private $tema;
		function __construct($tema = "Default") {
			//echo 'this is the view';
			$this->tema = $tema;
			$this->data = array();
		}
		public function assign($variable , $value)
		{
			$this->data[$variable] = $value;
		}

		public function render($name, $cabecalho="home", $noInclude = false)
		{
			extract($this->data);
			if ($noInclude == true) {
				require_once 'view/' .$this->tema. '/' .$name. '.php';
			}
			else {
				require_once 'view/' .$this->tema. '/' .$cabecalho. '_header.php';
				require_once 'view/' .$this->tema. '/' .$name. '.php';
				require_once 'view/' .$this->tema. '/' .$cabecalho. '_footer.php';
			}
		}
	}
/*
	class Views {
		private $url;
		public function __construct(){
			$this->url = "http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/";
		}
	
		public function menu(){
			/* COLOCAR UM MENU COMO DATA*//*
			require_once "header.php";
			
		}

		public function listarUsuario($vetor){
			$tab = "<table><th><td></td><td></td></th>";
			foreach($vetor as $Usuario){
				$tab .= "<tr></tr>";
			}
			$tab .= "</table>";
		}

		/* MEU *//*
		public function login(){
			require_once 'v_form.php';
		}
		public function logado(Usuario $usuario){
			require_once 'v_logado.php';
		}


		public function cadastro(){
			require_once 'v_form.php';
		}
		public function listar($lista){
			require_once 'v_listar.php';
		}
	
		public function sucesso(){
			require_once 'v_sucesso.php';
		}
		/* FIM MEU *//*

	}
*/
?>