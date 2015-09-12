import java.util.Scanner;

public class Exercicio_08 {

	public static void main(String[] args) {
		/*
		 	**  Dados 3 valores inteiros, verificar se representam um 
		 		tri�ngulo, sua classifica��o quanto aos lados (eq�il�tero,
		      	is�sceles ou escaleno) e seu per�metro.
		
				Lembre-se que, se A, B e C s�o lados de um tri�ngulo se
				e somente se, as medidas dos lados atendem � seguinte 
				express�o: 
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
				System.out.print("Eq�ilatero");
			}else{

				if((a==b)|| (b==c) ||(a==c)){
					System.out.print("Isosceles");
				}else{
					System.out.print("Escaleno");
				}
			}
		}else{
			System.out.print("A,B,C Digitados n�o formam um triangulo!");
		}
	}
}
