import java.util.Scanner;

public class Brincando {
	public static void main(String[] args) {
Scanner scanner = new Scanner(System.in);
		
		System.out.print("Leia o Scanner: ");
		int opc = scanner.nextInt();
		
		do{
			switch(opc){
			case 1:
				System.out.println("Voce escolheu"+opc);
			case 2:
				System.out.println("Voce escolheu"+opc);
			case 5:
				System.out.print("sair!");
			}
			
		}while(opc = 5);
	
		scanner.close();
	}
}
