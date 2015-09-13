<?php
/*
	Classe Fibonacci
		Atributos: 
			* historico(privado)

		Metodos: 
			* fib(privado)
			* fibonacci(publico)
*/
class Fibonacci{
	private $historico;
	public function __construct(){
		$this->historico = "";
	}
	private function fib($n){
		if($n == 0){
			return 0;
		}else if($n == 1 || $n == 2){
			return 1;
		}else{
			$aux = $this->fib($n-1)+$this->fib($n-2);
			return $aux;
		}
	}
	public function fibonacci($n){
		if($n == 0){
			$this->historico = "O número tem que ser maior que <b>0</b>!";
		}else if ($n < 0){
			$this->historico = "O número tem que ser positivo!";
		}else if($n > 35){
			$this->historico = "O número tem que ser menor que 35, Pois é ultilizado um sistema de recursão!";
		}else if($n > 0){
			for($i=0; $i<$n; $i++){
				$this->historico = $this->historico.$this->fib($i).($i==$n-1?".":", ");
			}
		}
		return $this->historico;
	}
}
?>