import java.util.Scanner;


public class Exercicio_06 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//** 06 - Dado um �ngulo em graus, converter este valor para Radianos 
		//  R= (pi G)/180
		
		Scanner entrada = new Scanner(System.in);
		double graus,radianos;
		
		System.out.print("Digite o �ngulo em Graus: ");
		graus = entrada.nextDouble();
		radianos = (Math.PI * graus)/180;
		
		System.out.print("Aconvers�o de Graus para Radianos �: "+radianos);
		entrada.close();

	}

}
