package Listas;

import java.util.Scanner;

public class Exercicio_06 {

	public static void main(String[] args) {
		
		// 6. Calcular o valor A elevado a um expoente B. 
		// Os valores A e B dever�o ser obtidos via teclado. N�o usar Math. 
		
		int iFor,iWhile=1,iDoWhile=1,calc=1,tc1,tc2,opc;
		Scanner entrada = new Scanner(System.in);
		
		do{
			System.out.println("\n\n1- For");
			System.out.println("2- While");
			System.out.println("3- Do While");
			System.out.println("4- Sair");
			System.out.print("Selecione a Op��o: ");
			opc= entrada.nextInt();
			
			switch(opc){
			case 1:
				System.out.println("\nOp��o 1- For Selecionada!");
				System.out.print("Digite o N�mero: ");
				tc1=entrada.nextInt();
				System.out.print("Digite o Expoente: ");
				tc2=entrada.nextInt();
				for(iFor=1;iFor<=tc2;iFor++){
					calc=calc*tc1;
					if(iFor==tc2){
						System.out.println("O Produto Gerado � = "+calc);
					}
				}
				break;
			case 2:
				System.out.println("\nOp��o 2- While Selecionada!");
				System.out.print("Digite o N�mero: ");
				tc1=entrada.nextInt();
				System.out.print("Digite o Expoente: ");
				tc2=entrada.nextInt();
				while(iWhile<=tc2){
					calc=calc*tc1;
					if(iWhile==tc2){
						System.out.println("O Produto Gerado � = "+calc);
					}
					iWhile++;
				}
				break;
			case 3:
				System.out.println("\nOp��o 3- Do While Selecionada!");
				System.out.print("Digite o N�mero: ");
				tc1=entrada.nextInt();
				System.out.print("Digite o Expoente: ");
				tc2=entrada.nextInt();
				do{
					calc=calc*tc1;
					if(iDoWhile==tc2){
						System.out.println("O Produto Gerado � = "+calc);
					}
					iDoWhile++;
				}while(iDoWhile<=tc2);
				break;
			case 4:
				System.out.println("\nOp��o 4- Sair Selecionada!!");
				break;
			default:
				System.out.print("\nOp��o Invalida, tente novamente!");
				break;
			}
		}while(opc< 4);
		entrada.close();

	}

}
