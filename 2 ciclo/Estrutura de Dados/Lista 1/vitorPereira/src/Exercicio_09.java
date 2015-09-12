import java.util.Scanner;


public class Exercicio_09 {
	public static void main(String[] args) {
		/*
		 	(A<B+C) e (C<A+B) e (B<A+C)
		 	09 Dados os lados A,B e C de um triângulo, calcular e exibir o perímetro e a área do mesmo. 
		 	(verifique, primeiro, se A,B e C representam um triângulo).

			Lembre-se que para calcular a área do triângulo, use a fórmula de Hierão, abaixo:  
			
			A=RaizQ Sp(Sp - a)(Sp - b)(Sp - c)
			
			onde Sp é o seguimento  
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
			System.out.print("A,B,C não Formam um triangulo!");
		}
		
	}
}
