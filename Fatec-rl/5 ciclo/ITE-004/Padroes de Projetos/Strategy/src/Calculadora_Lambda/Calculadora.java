package Calculadora_Lambda;

public class Calculadora {
	
	/**
	 * 	1.Fazer a functional interface
	 * 	2.Ter como atributo
	 * */
	
	Conta c;
	
	void setConta(Conta c){
		this.c = c;
	}
	
	void calcular(double a, double b){
		c.calc(a, b);
	}
}
