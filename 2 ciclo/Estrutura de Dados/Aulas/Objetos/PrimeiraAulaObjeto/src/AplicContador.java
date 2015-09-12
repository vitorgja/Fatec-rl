import java.util.Scanner;


public class AplicContador {

	public static void main(String[] args) {
		int opc;
		Scanner entrada = new Scanner(System.in);
		Contador meuContador = new Contador();
		
		do{
			System.out.println("1- incrementar");
			System.out.println("2- decrementar");
			System.out.println("3- mostre");
			//System.out.println("4- ");
			System.out.println("9- Sair");
			
			System.out.print("Digite a Opção: ");
			opc= entrada.nextInt();
			
			switch(opc){
				case 1:
					System.out.println("\n1- incrementar");
					meuContador.incrementar();
					break;
					
				case 2:
					System.out.println("\n2- decrementar");
						meuContador.decrementar();
					break;
					
				case 3:
					System.out.println("\n__________________\n"+meuContador.pegavalor()+"\n__________________");
					break;
					
				case 9:
					System.out.println("\nVoçê escoleu Sair!");
					break;
				
				default :
					System.out.println("Digite a opção correta!");	
					break;
				
			}
		}while(opc!=9);
		
		
		//meuContador.close();
		entrada.close();

	}

}
