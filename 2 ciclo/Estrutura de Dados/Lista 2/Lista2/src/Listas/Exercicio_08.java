package Listas;

public class Exercicio_08 {

	public static void main(String[] args) {
		// 8. Calcular e mostrar a soma dos n�meros pares menores que 1000. 
				
				int iFor,iWhile=1,iDoWhile=1,calc=0;				
				
				// For
				for(iFor=1;iFor<=1000;iFor++){
					if(iFor%2==0){
						calc=calc+iFor;
					}
				}
				System.out.println("Soma dos pares menores que 1000 � "+calc);
				
				// While
				calc=0;
				while(iWhile<=1000){
					if(iWhile %2 ==0){
						calc=calc+iWhile;
					}
					iWhile++;
				}
				System.out.println("Soma dos pares menores que 1000 � "+calc);
				
				// Do While
				calc=0;
				do{
					if(iDoWhile %2 ==0){
						calc=calc+iDoWhile;
					}
					iDoWhile++;
				}while(iDoWhile<=1000);
				System.out.println("Soma dos pares menores que 1000 � "+calc);
				

	}

}
