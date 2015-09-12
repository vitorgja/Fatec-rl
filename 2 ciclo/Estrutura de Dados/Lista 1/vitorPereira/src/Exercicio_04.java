import java.util.Scanner;

public class Exercicio_04 {
	public static void main(String[] args) {
		
		Scanner entrada = new Scanner(System.in);
		double volume,raio;
		
		System.out.print("Raio: ");
		raio = entrada.nextDouble();
		
		volume = (4.0/3.0)* Math.PI * Math.pow(raio, 2);
		System.out.print("Volume = "+volume);
		
		entrada.close();
	}
}
