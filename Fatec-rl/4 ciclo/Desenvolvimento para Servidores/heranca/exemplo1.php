<?php
	class Animal{
		private $nome;
		public function __construct($c){
			$this->nome = $c;
		}
		public function n(){
			echo $this->cachorro;
		}
		public function dormir(){
			echo "ZZZZZzzZZZZZZ";
		}
		public function comer(){
			echo "Comeu!!!";
		}
		private function algo(){
			echo "ALGO";
		}
		public function getNome(){
			echo $this->nome;
		}
		
		
		
		echo $this->algo()
	}
	class Cachorro extends Animal{
		private $amor;
		public function __construc($c){
			parent::__construc($c);
		}
		public function latir(){
			echo "AU AU Au Au";
		}
		public function brincar(){
			echo "Brinks";
		}

		public function laalgo(){
			echo $this->algo();
		}

	}
/*
	$a = new Animal("mafalda");
	$a->dormir();
	$a->comer();
	//$a->algo();
*/

$c = new Cachorro("alfredo");
$c->n();
$c->latir();
$c->brincar();

?>