import java.util.Scanner;


public class AplicFila {
	public static void main(String[] args) {
		int opc,
		valor;
		Fila f = new Fila(10);
		Scanner entrada = new Scanner(System.in);
		do{
			System.out.println("1- Insere");
			System.out.println("2- Remove");
			System.out.println("3- Primeiro");
			System.out.println("4- Quantidade");
			System.out.println("5- Valor de inic");
			System.out.println("6- Valor de fim");
			System.out.println("7- Mostra a fila");
			System.out.println("9- Fim");
			System.out.println("Selecione:");
			opc = entrada.nextInt();
			switch(opc){
			case 1:
				break;
			case 2:
				break;
			case 3:
				break;
			case 4:
				break;
			case 5:
				break;
			case 6:
				break;
			case 7:
				break;
			case 9:
				break;
			default:
				System.out.println("Opçao invalida");
				break;
			}
		}while(opc != 9);


		entrada.close();

	}
}
