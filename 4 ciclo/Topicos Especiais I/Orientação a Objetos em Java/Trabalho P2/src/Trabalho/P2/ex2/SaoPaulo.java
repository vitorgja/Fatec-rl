package Trabalho.P2.ex2;

public class SaoPaulo extends Time {

	private String nome,estadio,presidente;
	private int qtdJogadores;
	
	public SaoPaulo(String presidente, int qtdJogadores) {
		this.estadio = "Morumbi";
		this.presidente = presidente;
		this.qtdJogadores = qtdJogadores;
	}
	
	@Override
	public String informacoes() {
		// TODO Auto-generated method stub
		return ( 	"Nome do Time: "+ this.getClass().getSimpleName() +
					"\n Estadio: "+ estadio +
					"\n Presidente: "+ presidente +
					"\n "+ getQtdJogadores() +" Jogadores");
	}


	public int getQtdJogadores() {
		return qtdJogadores;
	}	
	
}
