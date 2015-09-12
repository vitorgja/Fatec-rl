import java.util.Scanner;


public class AplicLista {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		ListaLinear lista = new ListaLinear();
		
		int lololol,opc=0;
		Scanner entrada = new Scanner(System.in);
		
		
		do{
			System.out.println("1- Insere");
			System.out.println("2- Remove");
			System.out.println("3- Valor em uma Posição");
			System.out.println("4- Mostra lista");
			System.out.println("9- Sair");
			System.out.print("OPC:");
			opc =entrada.nextInt();
			
			switch(opc){
			case 1:
				if(lista.listacheia()){
					System.out.println("Lista Cheia!");
				}else{
					System.out.print("De um numero:");
					lololol = entrada.nextInt();
					lista.insere(lololol);
				}
				
				break;
			case 2:
				lista.remove();
				break;
			case 3:
				
				break;
			case 4:
				System.out.println( lista.pegaqtde() );
				break;
			default:
				System.out.println("Sair");
			}
		}while(opc!=9);
		
		
		
	}

}
