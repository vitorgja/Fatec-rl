import java.util.Scanner;


public class aplicacao {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner entrada = new entrada(System.in);
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
			
			switch(opc){
			
			case 9:
				
			}
		}while(opc==9);
		
		
	}

}
