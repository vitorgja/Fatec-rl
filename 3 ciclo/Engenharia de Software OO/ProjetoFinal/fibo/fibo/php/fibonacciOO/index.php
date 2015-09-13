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
		private $fib;
		public function __construct($fib=''){
			$this->fib = $fib;
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
		public function resultado(){
			if($this->fib==''){
				 "Não foi digitado um Numero";
			}else{
				require_once 'fibonacci.php';
				$f = new Fibonacci();

				$data['fibonacci'] = $f->fibonacci($this->fib);
				require_once 'view/resultado.php';
			}
		}

	}
	// N1 recebe um numero pela URL
	$n1 = (isset( $_GET['n1']) ? $_GET['n1'] : '');

	if(strlen($n1) > 0)
	{
		/*
		Instanciando o Objeto "Index" | 'pagina Inicial'
		É dado ao Objeto o nome de "pagina"
		*/
		$pagina = new Index($n1);
		$pagina->cabecalho();
		//$pagina->index();
		$pagina->formulario();
		$pagina->resultado();
		$pagina->rodape();
	}else{
		echo "<h1>Página de erro</h1>";
	}

?>