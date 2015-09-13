

import java.util.Scanner;

public class Exercicio_07 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//** Dado uma temperatura em graus Celsius, converter para graus Farenheit 
		// F= (C*9/5)+32
		
		Scanner entrada = new Scanner(System.in);
		double farenheigt,celsius;
		
		System.out.print("Digite a temperatura em Graus Celsius: ");
		celsius = entrada.nextDouble();
		
		farenheigt = (celsius*9/5) + 32;
		System.out.print("A conversão para Farenheigt é: "+farenheigt);
		
		
		entrada.close();
	}

}
