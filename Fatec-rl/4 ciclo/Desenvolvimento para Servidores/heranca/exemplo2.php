<?php
	// Ato de usar o mesmo nome de metodo dentro de uma relacao hierarquica. este conseito produz a a abstracao de um comportamento;

	// O comportamento do metodo depende da subclasse?
	// Sim sobresve
	class Animal{
		public function emitirSom(){
			echo "Nao sei, Depende";
		}
		public function dormir(){
			echo "ZZZzzZZzZZzzzHHzz";
		}
	}

	class Gato extends Animal{
		public function emitirSom(){
			echo "Miau MIAU miaU";
		}
	}

	class Cachorro extends Animal{
		public function emitirSom(){
			echo "AU AU Au Au";
		}
	}
	// GATO
	$g = new Gato();
	$g->dormir();
	$g->emitirSom();

	// CACHORRO
	$c = new Cachorro();
	$g->dormir();
	$c->emitirSom();
?>