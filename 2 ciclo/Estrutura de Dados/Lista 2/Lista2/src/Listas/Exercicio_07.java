package Listas;

import java.util.Scanner;

public class Exercicio_07 {

	public static void main(String[] args) {
		// 7. Ler um valor x qualquer, calcular e mostrar o resultado da express�o:
		//	  Y = ( x+1)+(x+2)+(x+3)+(x+4)+(x+5)+�(x+100). 
		int iFor,iWhile=1,iDoWhile=1,calc=0,x;
		Scanner entrada = new Scanner(System.in);
		
		System.out.print("Digite o Valor de X: ");
		x=entrada.nextInt();
		
		// For
		for(iFor=1;iFor<=100;iFor++){
			calc=calc+(x+iFor);
		}
		System.out.println("(x+1)+(x+2)+(x+3)+(x+4)+(x+5)+�(x+100)= "+calc);
		
		// While
		calc=0;
		while(iWhile<=100){
			calc=calc+(x+iWhile);
			iWhile++;
		}
		System.out.println("(x+1)+(x+2)+(x+3)+(x+4)+(x+5)+�(x+100)= "+calc);
		
		// Do While
		calc=0;
		do{
			calc=calc+(x+iDoWhile);
			iDoWhile++;
		}while(iDoWhile<=100);
		System.out.print("(x+1)+(x+2)+(x+3)+(x+4)+(x+5)+�(x+100)= "+calc);
		entrada.close();

	}

}
