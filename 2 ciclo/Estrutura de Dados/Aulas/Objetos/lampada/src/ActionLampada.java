import java.util.Scanner;


public class ActionLampada {

	public static void main(String[] args) {
		int opc;
		Lampada lampada = new Lampada();
		Scanner entrada = new Scanner(System.in);
		
		do{
			System.out.println("1-Acender");
			System.out.println("2-Apagar");
			System.out.println("3-");
			System.out.println("4-Sair");
			System.out.println("Digite a Opção: ");
			opc = entrada.nextInt();
			switch(opc){
			case 1:
				lampada.acende();
				break;
			
			case 2:
				lampada.apaga();
				break;
			case 3:
				if(lampada.pegarStatus()==true){
					System.out.println("\nA Lampada esta Acesa!\n");
				}else{
					System.out.println("\nA Lampada esta Apagada!\n");
				}
				break;
			case 4:
				System.out.println("Voce digitou Sair!");
				break;
			default:
				System.out.println("Digite uma opção valida!");
			}
		}while(opc!=4);
		
		entrada.close();
		

	}

}
