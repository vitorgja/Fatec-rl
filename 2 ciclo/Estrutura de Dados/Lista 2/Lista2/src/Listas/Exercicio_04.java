package Listas;

public class Exercicio_04 {
	public static void main(String[] args) {
		//4. Calcular e mostrar o resultado da seguinte série: 1+2+3+...+50. 	
		
		// Variaveis
		int iFor,iWhile,iDoWhile,calc = 0;
		
		// Inicio
		
		// For
		for(iFor=1;iFor<=50;iFor++){
			calc=calc+iFor;
			if(iFor==50){
				System.out.println("O Resultado de 1+2+3+4+5...+50 = "+calc);
			}
		}
		
		// While
		calc = 0;
		iWhile =1;
		while(iWhile<=50){
			calc=calc+iWhile;
			if(iWhile==50){
				System.out.println("O Resultado de 1+2+3+4+5...+50 = "+calc);
			}
			
			iWhile++;
		}
		
		// Do While
		calc = 0;
		iDoWhile = 1;
		do{
			calc=calc+iDoWhile;
			if(iDoWhile==50){
				System.out.println("O Resultado de 1+2+3+4+5...+50 = "+calc);
			}
			
			iDoWhile++;
		}while(iDoWhile<=50);
		
		
	}
}
