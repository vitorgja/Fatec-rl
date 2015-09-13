

import java.util.Scanner;

public class Exercicio_10 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//*** Dado um valor x, qualquer, calcular e exibir o valor da função: 
		// Y= X² + 3 PI;
		
		Scanner entrada = new Scanner(System.in);
		double x,y;
		
		System.out.print("De o valor de ' X ': ");
		x= entrada.nextDouble();
		y = Math.pow(x, 2) + 3*Math.PI;
		
		System.out.print("Y = "+y);
		entrada.close();
	}

}
