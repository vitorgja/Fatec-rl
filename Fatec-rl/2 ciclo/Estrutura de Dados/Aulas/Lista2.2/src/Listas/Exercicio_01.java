package Listas;

public class Exercicio_01 {
	public static void main(String[] args) {
		//1. Mostrar a seguinte s�rie: 1, 2, 3, ...,50 
		
		// Declara��o de Variaveis
		int iFor,iWhile,iDoWhile;
		
		// Inicio
		
		// For
		for(iFor=1;iFor<=50;iFor++){
			
			if(iFor!=50){
				System.out.print(iFor+", ");
			}else{
				System.out.println(iFor+".");
			}
			
		}
		
		//While
		iWhile = 1;
		while(iWhile<=50){
			if(iWhile!=50){
				System.out.print(iWhile+", ");
			}else{
				System.out.println(iWhile+".");
			}
			iWhile++;
		}
		
		//Do While
		iDoWhile=1;
		do{
			if(iDoWhile!=50){
				System.out.print(iDoWhile+", ");
			}else{
				System.out.println(iDoWhile+".");
			}
			iDoWhile++;
		}while(iDoWhile<=50);
		
		
	}
}
