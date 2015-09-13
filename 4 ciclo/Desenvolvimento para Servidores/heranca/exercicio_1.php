<?php
	/*
		EXERCICIO: Todo quadrilatero possui 
		calculos de area e de perimetro baseado 
		no tamanho de seu(s) lado(s). um Quadrado 
		é um Quadrilatero assim como um Retangulo,
		O Quadrado precisa apenas do valor de um
		lado para calcular os valores de area e 
		perimetro e o Retangulo dois. Codifique 
		esta situação usando os conseitos dados em
		aula. Faca os testes.
	*/
	// Classe Abstrata nao pode ser instaciada pois nao faz sentido!
	class Quadrilatero{
		protected $lado1;

		public function __construct($l1){
			$this->lado1 = $l1;
		}
		// Metodo sem Sintido - (Metodo Abstrato)
		public function calcularArea(){
			return  0;
		}
	}

	class Quadrado extends Quadrilatero{

		public function calcularArea(){
			return  $this->lado1 * $this->lado1;
		}
		public function calcularPerimetro(){
			return 4*$this->lado1;
		}
	}

	class Retangulo extends Quadrilatero{
		private $lado2;
		public function __construc($lada1,$lado2){
			parent::__construc($lado1);
			$this->lado2 = $lado2;
		}
		public function calcularPerimetro(){
			return 2*$this->lado1 + 2*$this->lado2;
		}
		public function calcularArea(){
			return  $this->lado1 * $this->lado2;
		}
	}
$q = new Quadrado(2);
echo $q->calcularPerimetro();
echo "<br>";
echo $q->calcularArea();
echo "<br>";
echo "<br>";
$r = new Retangulo(5,4);
echo $r->calcularPerimetro();
echo "<br>";
echo $r->calcularArea();
?>