import java.util.Scanner;


public class AplicDuplaFila {
	public static void main(String[] args) {
		int opc=0,
		valor=0;
		DuplaFila df = new DuplaFila(10);
		Scanner entrada = new Scanner(System.in);
		do{
			System.out.println("------------------");
			System.out.println("1- Insere no final");
			System.out.println("2- Insere no inicio");
			System.out.println("3- Remove no final");
			System.out.println("4- Remove no inicio");
			System.out.println("5- Primeiro");
			System.out.println("6- Ultimo");
			System.out.println("7- Quantidade");
			System.out.println("8- Valor de inic");
			System.out.println("9- Valor de fim");
			System.out.println("10- Mostra a fila");
			System.out.println("20 - Fim.");;
			System.out.println("Selecione:");
			opc = entrada.nextInt();
			switch(opc){
			case 1:
				
				System.out.println("1- Insere no Final");
				System.out.print("Digite o Numero: ");
				valor = entrada.nextInt();
				if(df.filacheia()){
					System.out.println("Fila Cheia");
				}else{
					df.insere(valor);
				}
				break;
			case 2:
				System.out.println("2- Insere no Inicio");
				System.out.print("Digite o Numero: ");
				valor = entrada.nextInt();
				
				if(df.filacheia()){
					System.out.println("Fila Cheia");
				}else{
					df.insere(valor);
				}
				break;
			case 3:
				System.out.println("3- Remove no Final");
				if(df.filavazia()){
					System.out.println("Fila Vazia");
				}else{
					df.removeFim();
				}
				break;
			case 4:
				System.out.println("4- Remove no Inicio");
				if(df.filavazia()){
					System.out.println("Fila Vazia");
				}else{
					df.remove();
				}
				break;
			case 5:
				System.out.println("5- Primeiro");
				System.out.println(df.pegaValor(df.getInic()));
				break;
			case 6:
				System.out.println("6- Ultimo");
				System.out.println(df.pegaValor(df.getFim()));
				break;
			case 7:
				System.out.println("7- Quantidade");
				System.out.println(df.getQtde());
				break;
			case 8:
				System.out.println("8- Valor de Inic");
				System.out.println(df.getInic());
				break;
			case 9:
				System.out.println("8- Valor de Inic");
				System.out.println(df.getInic());
				break;
			case 10:
				System.out.println("Mostra fila");
				if(df.filavazia()){
					System.out.println("Fila Vazia");
				}else{
				
					if(df.getInic()<=df.getFim()){
						for(int i=df.getInic();i<=df.getFim();i++){
							System.out.println(i+"="+df.pegaValor(i));
						}
					}else{
						for(int i=df.getInic();i<=df.getFim();i++){
							System.out.println(i+"="+df.pegaValor(i));
						}
						for(int i=0;i<=df.getFim();i++){
							System.out.println(i+"="+df.pegaValor(i));
						}
					}
				}
				break;
			case 20:
				System.out.println("Sair Selecionado Corintinao!");
				break;
			default:
				System.out.println("Opçao invalida");
				break;
			}
		}while(opc != 20);


		entrada.close();

	}
}