package Trabalho.P2.ex2;

public class Santos extends Time{
	private String estadio,presidente, destaque;
	private int qtdJogadores;
	
	public Santos(String presidente, String destaque, int qtdJogadores) {
		this.estadio = "Vila Belmiro";
		this.presidente = presidente;
		this.destaque = destaque;
		this.qtdJogadores = qtdJogadores;
	}

	@Override
	public String informacoes() {
		return ( 	"Nome do Time: "+ this.getClass().getSimpleName() +
					"\n Estadio: "+ estadio +
					"\n Presidente: "+ presidente +
					"\n "+ getQtdJogadores() +" Jogadores" +
					"\n Destaque: "+ destaque);
	}
	
	public int getQtdJogadores() {	
		return qtdJogadores;
	}
	
}
