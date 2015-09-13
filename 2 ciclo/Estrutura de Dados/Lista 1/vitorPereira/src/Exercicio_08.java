import java.util.Scanner;

public class Exercicio_08 {

	public static void main(String[] args) {
		/*
		 	**  Dados 3 valores inteiros, verificar se representam um 
		 		triângulo, sua classificação quanto aos lados (eqüilátero,
		      	isósceles ou escaleno) e seu perímetro.
		
				Lembre-se que, se A, B e C são lados de um triângulo se
				e somente se, as medidas dos lados atendem à seguinte 
				expressão: 
				(A<B+C) e (C<A+B) e (B<A+C) 
		 * */
		// Variaveis
		Scanner entrada = new Scanner(System.in);
		int a,b,c;
		
		// Entrada de Dados
		System.out.print("A: ");
		a = entrada.nextInt();
		System.out.print("B: ");
		b = entrada.nextInt();
		System.out.print("C: ");
		c = entrada.nextInt();
		entrada.close();
		
		//Processamento
		
		if((a<b+c)&&(c<a+b)&&(b<a+c)){
			System.out.println("A,B,C Digitados formam um triangulo");
			if((a==b)&&(a==c)){
				System.out.print("Eqüilatero");
			}else{

				if((a==b)|| (b==c) ||(a==c)){
					System.out.print("Isosceles");
				}else{
					System.out.print("Escaleno");
				}
			}
		}else{
			System.out.print("A,B,C Digitados não formam um triangulo!");
		}
	}
}
