package Trabalho.P2.ex2;

public class AplicaCampeonato {

	public static void main(String[] args) {
		
		Time a = new Santos("presidente", "destaque", 12) ;
		Time b = new SaoPaulo("presidente", 14) ;
		Campeonato camp = new Campeonato( a, b);
		
		camp.iniciarJogo();
		
	}

}
