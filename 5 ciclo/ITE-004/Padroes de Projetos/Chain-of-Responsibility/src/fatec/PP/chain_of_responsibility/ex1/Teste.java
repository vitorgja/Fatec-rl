package fatec.PP.chain_of_responsibility.ex1;

import java.util.Scanner;

public class Teste {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner entrada = new Scanner(System.in);
		
		System.out.print("Digite o Valor da Verba: ");
		Verba v = new Verba(entrada.nextDouble());
		
		Analista a = new Analista();
		Gerente g = new Gerente();
		Diretor d = new Diretor();
		CEO ceo = new CEO();
		
		d.adicionarCargos(ceo);
		g.adicionarCargos(d);
		a.adicionarCargos(g);
	
		a.aprovarVerba(v);
		
		entrada.close();
	}

}
