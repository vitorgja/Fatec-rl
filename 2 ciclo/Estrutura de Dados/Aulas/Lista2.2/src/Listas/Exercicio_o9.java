package Listas;

import java.util.Scanner;

public class Exercicio_o9 {
	public static void main(String[] args) {
		// 9. Mostrar a série Fibonacci até 0 N-ésimo termo. 
		// A série tem a seguinte forma: 1, 1, 2, 3, 5, 8, 13, 21, 34,… 
		/*
		
		ant 	0
		prox 	1
		temp 	0+1
		
		ant		1
		prox	1
		temp	1+1
		
		ant 	1
		prox 	2
		temp 	1+2
		
		ant		2
		prox 	3
		temp  	2+3
		
		ant 	3
		prox	5
		temp 	3+5
		
		ant		5
		prox	8
		temp 	13
		*/
		
		int iFor,iWhile=1,iDoWhile=1,n,ant,prox,temp;
		Scanner entrada = new Scanner(System.in);
		System.out.print("Diguite o Número: ");
		n=entrada.nextInt();
		
		
		// For
		ant=0;
		prox=1;
		temp=0;
		for(iFor=1;iFor<=n;iFor++){
			ant=prox;
			prox=temp;
			temp=ant+prox;
				
			if(iFor!=n){
				System.out.print(temp+",");
			}else{
				System.out.println(temp+".");
			}
		}
		
		//While
		ant=0;
		prox=1;
		temp=0;
		while(iWhile<=n){
			ant=prox;
			prox=temp;
			temp=ant+prox;
				if(iWhile!=n){
					System.out.print(temp+",");
				}else{
					System.out.println(temp+".");
				}
			iWhile++;
		}
		
		
		// Do While
		ant=0;
		prox=1;
		temp=0;
		do{
			ant=prox;
			prox=temp;
			temp=ant+prox;
			if(iDoWhile!=n){
				System.out.print(temp+",");
			}else{
				System.out.println(temp+".");
			}
				
			iDoWhile++;
		}while(iDoWhile<=n);
		
		entrada.close();
		
	}
}
