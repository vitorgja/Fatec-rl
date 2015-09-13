import java.util.Scanner;

import javax.swing.JOptionPane;


public class AplicPilhaLigada {

	public static void main(String[] args) {
		PilhaLigada p = new PilhaLigada();
		Scanner entrada = new Scanner(System.in);
		int opc;
		int valor;
		do{
			System.out.println("1-empilha");
			System.out.println("2-desempilha");
			System.out.println("3-elemento do topo");
			System.out.println("4-mostra a pilha");
			System.out.println("9-fim");
			System.out.println("Selecione:");
			opc = entrada.nextInt();
			switch(opc){
			case 1:
				System.out.println("Valor=");
				valor = entrada.nextInt();
				p.empilha(valor);
				break;
			case 2:
				if(p.pilhavazia())
					System.out.println("pilha vazia.... ");
				else
					System.out.println("Desempilhado:"+p.desempilha());
				break;
			case 3:
				if(p.pilhavazia())
					System.out.println("pilha vazia.... ");
				else
					System.out.println("Elem. do topo:"+p.elementodotopo());
				break;
			case 4:
				System.out.println("mostrando a pilha....");
				if(p.pilhavazia())
					System.out.println("pilha vazia....");
					
				else{
					Node aux = p.getTopo();
					while (aux != null){
						System.out.println(aux.info);
						aux = aux.prox;
						
					}
				}
				break;
			}
			
		}while(opc!=9);
		
	}

}
