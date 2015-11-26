package Calculadora_Lambda;

public class Teste {
	
	
	public static void main(String[] args) {
		
		Calculadora c = new Calculadora();
		Conta soma = (a,b)->{
			System.out.println("SOMA: " + (a + b) );
		};
		c.setConta(soma);
		c.calcular(10, 10);
		
		
		
		Conta divisao = (a,b)->{
			System.out.println("SOMA: " + (a / b) );
		};
		c.setConta(divisao);
		c.calcular(10, 10);
		
		
	}
}
