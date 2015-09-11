<?php
/*
	Classe Fibonacci
		Atributos: 
			* historico(privado)

		Metodos: 
			* fib(privado)
			* fibonacci(publico)
*/


// Classe Fibonacci
class Fibonacci{
	// Atributo privado(inacessivel fora da classe Fibonacci)
	private $historico;

	// função do PHP que inicializa e passa o conteudo do atributo(inicializa o atributo como vazio)
	public function __construct(){
		$this->historico = "";
	}

	// Metodo Privado(inacessivel fora da classe Fibonacci) 
	// que faz o calculo do fibonacci de forma "RECURSIVA" ultilizando uma formula matematica adaptada

	/*	se f(n==0) = 0
	 *	se f(n==1) = 1
	 *	se f(n==2) = 1
	 *	se f(n>2) = f(n-2) + f(n-1)
	*/
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
	// Metodo que gera o historico do numero passado
	// ex.: fibonacci(5)    RESULTA EM: "0, 1, 1, 2, 3."
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
}// fim da Classe Fibonacci
?>