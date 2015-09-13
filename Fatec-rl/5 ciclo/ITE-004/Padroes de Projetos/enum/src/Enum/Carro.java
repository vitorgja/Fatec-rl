package Enum;

public class Carro {

	private String nome;
	
	//esse atrubuto possui o TipoCarro que 
	private TipoCarro tipo;

	public Carro(String nome, TipoCarro tipo) {
		super();
		this.nome = nome;
		this.tipo = tipo;
	}
	
	public void mostrarInfo(){
		System.out.println("Nome = " + nome);
		System.out.println("Tipo = " + tipo);
	}
	
	
}
