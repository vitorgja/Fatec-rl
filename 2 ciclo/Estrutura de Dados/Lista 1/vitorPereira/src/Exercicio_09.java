import java.util.Scanner;


public class Exercicio_09 {
	public static void main(String[] args) {
		/*
		 	(A<B+C) e (C<A+B) e (B<A+C)
		 	09 Dados os lados A,B e C de um tri�ngulo, calcular e exibir o per�metro e a �rea do mesmo. 
		 	(verifique, primeiro, se A,B e C representam um tri�ngulo).

			Lembre-se que para calcular a �rea do tri�ngulo, use a f�rmula de Hier�o, abaixo:  
			
			A=RaizQ Sp(Sp - a)(Sp - b)(Sp - c)
			
			onde Sp � o seguimento  
			Sp= (A + B + C)/2 
		*/
		// Variaveis
		Scanner entrada = new Scanner(System.in);
		double a,b,c,Sp,area;
		
		// Entrada de Dados
		System.out.print("A: ");
		a = entrada.nextDouble();
		System.out.print("B: ");
		b = entrada.nextDouble();
		System.out.print("C: ");
		c = entrada.nextDouble();
		entrada.close();
		
		//processamento
		if((a<b+c)&&(b<a+c)&&(c<a+b)){
			Sp = (a+b+c)/2;
						
			area = Math.sqrt(Sp*(Sp - a)*(Sp - b)*(Sp - c));
			System.out.print("Area = "+area);
		}else{
			System.out.print("A,B,C n�o Formam um triangulo!");
		}
		
	}
}
