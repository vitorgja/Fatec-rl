import java.util.Scanner;


public class Exercicio_05 {
	public static void main(String[] args) {
		//** Dado o raio de um círculo, calcular e exibir a área do mesmo e o comprimento de sua circunferência.
		// A=pi * r^2   
		// C=2* pi *R
		
		
		Scanner entrada = new Scanner(System.in);
		double raio,area,compr;
		
		System.out.print("De o Raio: ");
		raio = entrada.nextDouble();
		
		area = Math.PI * Math.pow(raio, 2);
		compr = 2*Math.PI * raio;
		
		System.out.print("Area = "+area+"\nComprimento = "+compr);
		
		
		
		entrada.close();

	}
}
