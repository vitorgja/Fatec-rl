<?php
	/*
		Classe Index
		Atributos:
			* fib(privado)

		Metodos:
			* cabecalho(publico)
			* formulario(publico)
			* rodape(publico)
			* Resultado(publico)


		Index Chama a view de formulario
	*/
	class Index {
		private $data;
		public function __construct( $data = null ){
			$this->data = $data;
		}
		public function cabecalho(){
			require_once "view/cabecalho.php";
		}
		public function formulario(){
			require_once "view/formulario.php";
		}
		public function rodape(){
			require_once "view/rodape.php";
		}

		public function mostrar(){
			if($this->data!=null){
				require_once "salvar.php";
				$salvar = new Salvar(	$this->data['nome'],
									 	$this->data['sexo'],
									 	$this->data['salario'],
									 	$this->data['idade'],
									 	$this->data['profissao']	);
				$salvar->mostrar();
			}
		}

	}
	// variavel data armazena os dados preenchidos pelo usuario;
	
	// $data['nome'] = isset($_POST['nome']) ? $_POST['nome'] : "";
	// $data['sexo'] = isset($_POST['sexo']) ? $_POST['sexo'] : "";
	// $data['idade'] = isset($_POST['idade']) ? $_POST['idade'] : "";
	// $data['salario'] = isset($_POST['salario']) ? $_POST['salario'] : "";
	// $data['profissao'] = isset($_POST['profissao'])? $_POST['profissao'] : "";
	


	$candidato = null;

	if(isset($_POST['nome']) == 1 && isset($_POST['sexo']) == 1 && isset($_POST['idade']) == 1 && isset($_POST['salario']) == 1 && isset($_POST['profissao']) == 1 ){
		$candidato = array();
	 	$candidato['nome'] = $_POST['nome'];
	 	$candidato['sexo'] = $_POST['sexo'];
		$candidato['idade'] = $_POST['idade'];
		$candidato['salario'] = $_POST['salario'];
		$candidato['profissao'] = $_POST['profissao'];
	}


	/*
		Instanciando o Objeto "Index" | 'pagina Inicial'
		É dado ao Objeto o nome de "pagina"
	*/
	$pagina = new Index($candidato);
	$pagina->cabecalho();
	if($candidato == null){
		$pagina->formulario();
	}else{
		$pagina->mostrar();
	}
	$pagina->rodape();

?>