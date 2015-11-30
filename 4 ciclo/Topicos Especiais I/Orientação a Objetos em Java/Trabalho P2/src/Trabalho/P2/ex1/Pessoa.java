package Trabalho.P2.ex1;

abstract public class Pessoa {
	private String nome;
	private int idade;
	
	public Pessoa(String nome, int idade) {
		this.nome = nome;
		this.idade = idade;
	}
	public String infoPessoa(){
		return "Nome: "+ nome +"\nIdade: "+ idade;
	}
	
}
