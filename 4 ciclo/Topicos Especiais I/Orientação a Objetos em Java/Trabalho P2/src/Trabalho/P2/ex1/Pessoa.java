package Trabalho.P2.ex1;

public abstract class Pessoa {
	
	private String nome;
	private String rg;
	private int idade;
	
	public Pessoa(String nome, String rg, int idade) {
		
		this.nome = nome;
		this.rg = rg;
		this.idade = idade;
		
	}
	
	// Métodos Get
	
	public String GetNome(){
		
		return this.nome;
	}
	
	public String GetRg(){
		
		return this.rg;
	}
	
	public int GetIdade(){
		
		return idade;
	}

}
