package Trabalho.P2.ex1;
import java.util.Random;

public class Aluno extends Pessoa {

	private int numero_de_matricula;
	public Aluno(String nome, String rg, int idade) {
		super(nome,rg,idade);
		numero_de_matricula = GerarMatricula();
	}
	private int GerarMatricula(){
		Random rand = new Random();
		int n = rand.nextInt(500000);
		return n;
	}
	public int GetMatricula(){	
		return numero_de_matricula;
	}
}
