import java.util.Scanner;

public class Exercicio_02 {

	public static void main(String[] args) {
		
		int idade;
		String nome;
		Scanner entrada = new Scanner(System.in);
		
		System.out.print("Digite o Nome: ");
		nome = entrada.next();
		System.out.print("Digite a Idade: ");
		idade = entrada.nextInt();
		
		System.out.print("Nome: "+nome); 
		System.out.print("Idade:  "+ idade);
		entrada.close();
		
	}

}
