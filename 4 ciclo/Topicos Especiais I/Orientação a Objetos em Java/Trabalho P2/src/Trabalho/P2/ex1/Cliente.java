package Trabalho.P2.ex1;

public class Cliente extends Pessoa{
	private int codigo;
	public Cliente(String nome, int idade, int codigo) {
		super(nome, idade);
		this.codigo = codigo;
	}
	
	public String infoCliente(){
		return (
			super.infoPessoa()+
			"Codigo: " + codigo 
		);
	}
}
