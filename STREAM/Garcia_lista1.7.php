<?php

	class Cliente {
		private $nome, $CPF, $telefone;

		public function __construct($nome, $CPF, Telefone $telefone){
			$this->nome = $nome; 
			$this->CPF = $CPF;
			$this->telefone = $telefone;
		}
		public function dadosCliente(){
			echo "Nome: $this->nome <br>";
			echo "CPF: $this->CPF <br>";
			echo "Telefone: (".$this->telefone->obterDDD().") ".$this->telefone->obterNumero()."<br>";
		}

		public function addTelefone(Telefone $telefone){
			$this->telefone = $telefone;
		}
	}

	class Telefone {
		private $numero,$DDD;

		public function __construct($DDD, $numero){
			$this->numero = $numero;
			$this->DDD = $DDD;
		}

		public function obterDDD(){
			return $this->DDD; 
		}
		public function obterNumero(){
			return $this->numero; 
		}
	}

$t = new Telefone(13,987654321);
$c = new Cliente("Vitor Pereira", "123.456.789",$t);
$c->dadosCliente();



$d = new Telefone(15, 999000888);
$c->addTelefone($d);
$c->dadosCliente();

?>