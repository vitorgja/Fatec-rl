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
		public function __construct($data=null){
			$this->data = $data;
		}
		public function cabecalho(){
			require_once "view/cabecalho.html";
		}
		public function formulario(){
			require_once "view/formulario.html";
		}
		public function rodape(){
			require_once "view/rodape.html";
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
	/*
	$data['nome'] = isset($_POST['nome']) ? $_POST['nome'] : "";
	$data['sexo'] = isset($_POST['sexo']) ? $_POST['sexo'] : "";
	$data['idade'] = isset($_POST['idade']) ? $_POST['idade'] : "";
	$data['salario'] = isset($_POST['salario']) ? $_POST['salario'] : "";
	$data['profissao'] = isset($_POST['profissao'])? $_POST['profissao'] : "";
	*/
	if(isset($_POST['nome'])&& isset($_POST['sexo']) && isset($_POST['idade']) && isset($_POST['salario']) && isset($_POST['profissao'])){
	 	$data['nome'] = $_POST['nome'];
	 	$data['sexo'] = $_POST['sexo'];
		$data['idade'] = $_POST['idade'];
		$data['salario'] = $_POST['salario'];
		$data['profissao'] = $_POST['profissao'];
	}else{
		$data = null;
	}

	/*
		Instanciando o Objeto "Index" | 'pagina Inicial'
		É dado ao Objeto o nome de "pagina"
	*/
	$pagina = new Index($data);
	$pagina->cabecalho();
	if($data == null){
		$pagina->formulario();
	}else{
		$pagina->mostrar();
	}
	$pagina->rodape();

?>