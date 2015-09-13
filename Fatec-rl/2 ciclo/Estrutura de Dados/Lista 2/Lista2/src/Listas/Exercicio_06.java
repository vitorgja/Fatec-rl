package Listas;

import java.util.Scanner;

public class Exercicio_06 {

	public static void main(String[] args) {
		
		// 6. Calcular o valor A elevado a um expoente B. 
		// Os valores A e B deverão ser obtidos via teclado. Não usar Math. 
		
		int iFor,iWhile=1,iDoWhile=1,calc=1,tc1,tc2,opc;
		Scanner entrada = new Scanner(System.in);
		
		do{
			System.out.println("\n\n1- For");
			System.out.println("2- While");
			System.out.println("3- Do While");
			System.out.println("4- Sair");
			System.out.print("Selecione a Opção: ");
			opc= entrada.nextInt();
			
			switch(opc){
			case 1:
				System.out.println("\nOpção 1- For Selecionada!");
				System.out.print("Digite o Número: ");
				tc1=entrada.nextInt();
				System.out.print("Digite o Expoente: ");
				tc2=entrada.nextInt();
				for(iFor=1;iFor<=tc2;iFor++){
					calc=calc*tc1;
					if(iFor==tc2){
						System.out.println("O Produto Gerado é = "+calc);
					}
				}
				break;
			case 2:
				System.out.println("\nOpção 2- While Selecionada!");
				System.out.print("Digite o Número: ");
				tc1=entrada.nextInt();
				System.out.print("Digite o Expoente: ");
				tc2=entrada.nextInt();
				while(iWhile<=tc2){
					calc=calc*tc1;
					if(iWhile==tc2){
						System.out.println("O Produto Gerado é = "+calc);
					}
					iWhile++;
				}
				break;
			case 3:
				System.out.println("\nOpção 3- Do While Selecionada!");
				System.out.print("Digite o Número: ");
				tc1=entrada.nextInt();
				System.out.print("Digite o Expoente: ");
				tc2=entrada.nextInt();
				do{
					calc=calc*tc1;
					if(iDoWhile==tc2){
						System.out.println("O Produto Gerado é = "+calc);
					}
					iDoWhile++;
				}while(iDoWhile<=tc2);
				break;
			case 4:
				System.out.println("\nOpção 4- Sair Selecionada!!");
				break;
			default:
				System.out.print("\nOpção Invalida, tente novamente!");
				break;
			}
		}while(opc< 4);
		entrada.close();

	}

}
