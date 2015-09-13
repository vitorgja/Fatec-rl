package Enum_Cartao;

public class Cartao {
	private String nome;
	public double anuidade;
	private TiposCartoes tipo;
	
	public Cartao(String nome,double anuidade ,TiposCartoes tipo) {
		this.nome = nome;
		this.anuidade = anuidade;
		this.tipo = tipo;
	}

	public double calcular(){
		return anuidade - (anuidade * tipo.getTaxa());
	}
	public void mostrar(){
		System.out.println("Nome" + nome);
	}
}
