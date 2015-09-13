import java.util.Scanner;


public class AplicaLista {

	public static void main(String[] args) {
		ListaLinear lista = new ListaLinear();
		int opc;
		int valor;
		int posicao;
		
		Scanner entrada = new Scanner(System.in);
		
		do{
			System.out.println("1 - Insere");
			System.out.println("2 - remove");
			System.out.println("3 - valor em uma posição");
			System.out.println("4 - mostra a lista");
			System.out.println("9 - fim");
			System.out.print("Selecione: ");
			opc = entrada.nextInt();
		
		switch(opc){
		
		case 1:
				System.out.print("Digite o valor:");
				valor = entrada.nextInt();
				if( lista.listacheia() ){
					System.out.println("\n***Lista cheia***\n");
				}else{
					lista.insere(valor);
				}
				break;
				
		case 2:
			int aux;
			aux = lista.pegavalor(lista.pegavalordeP());
		
				if( lista.listavazia() ){
					System.out.println("Lista vazia");
				}else{
					System.out.println(lista.pegavalordeP());
					lista.remove();
					System.out.println(lista.pegavalordeP());
					System.out.println(lista.pegavalor(lista.pegavalordeP()));
					System.out.println("olaaaa");
					System.out.println("O "+ aux+ " foi removido");
					System.out.println(lista.pegavalordeP());
				}	
					
				lista.remove();
				break;
		
		case 3:
				if( lista.listavazia() ){
						System.out.println("Lista Vazia!");
				}else{
						System.out.print("Qual Posição: ");
						posicao = entrada.nextInt();
						
						if((posicao>=-1)&&( posicao<=lista.pegavalordeP() )){
							System.out.println( "Posicao: "+lista.pegavalor(posicao) +"\n");
						}else{
							System.out.println("Posicao nao encontrada!");
						}
					
				}
			break;
		
		case 4:
			int i;
			System.out.print("Lista: ");
			for(i=0;i<=(lista.pegavalordeP());i++){
				System.out.print(i+" - "+lista.pegavalor(i)+"; ");
			}
			System.out.println("");
			
			break;
		
		case 9:
			System.out.println("Sair!");
			break;
		
		default:
			System.out.println("opção invalida");
		}
		
		}while(opc != 9);//=!não igual
		entrada.close();
	}

} 
