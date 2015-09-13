import java.util.Scanner;

public class Exercicio_03 {
	public static void main(String[] args) {
		float base,altura,area,perimetro;
		Scanner entrada = new Scanner(System.in);
		
		System.out.print("Base: ");
		base =entrada.nextFloat();
		System.out.print("Altura: ");
		altura = entrada.nextFloat();
				
		perimetro = (2*base) + (2*altura);		
		System.out.print("Perimetro: "+ perimetro);
	
		area = base*altura;
		System.out.print("\nArea: "+area);
		
		entrada.close();
		
	}
}
