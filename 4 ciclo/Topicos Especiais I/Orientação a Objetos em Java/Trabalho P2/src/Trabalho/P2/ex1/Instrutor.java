package Trabalho.P2.ex1;

public class Instrutor extends Pessoa{
	private String area;
	private int codigo;
	
	public Instrutor(String nome, int idade, String area, int codigo) {
		super(nome, idade);
		this.area = area;
		this.codigo = codigo;
	}
	public String infoCliente(){
		return(
			super.infoPessoa()+
			"Codigo: " +codigo+
			"Area: " +area
		);
	}
}
