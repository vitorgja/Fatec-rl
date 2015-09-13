import java.util.Scanner;


public class aplicacao {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner entrada = new Scanner(System.in);
		Fila f = new Fila(10);
		int opc;
		do{
			System.out.println("1- Insere");
			System.out.println("2- Remove");
			System.out.println("3- Primeiro");
			System.out.println("4- quantidade");
			System.out.println("5- valor de inic");
			System.out.println("6- valor de fim");
			System.out.println("7- mostra Fila");
			System.out.println("9- FIM");
			System.out.print("Selevione: ");
			opc = entrada.nextInt();
			System.out.println("\n\n");
			switch(opc){
			case 1:
				System.out.println("* 1- Insere");
				System.out.print("De um Numero: ");
				int n = entrada.nextInt();
				f.insere(n);
				break;
				
			case 7: 
				
				break;
			case 9:
				System.out.println("SAIR");
			}
		}while(opc==9);
		
		
	}

}
