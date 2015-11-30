package Trabalho.P2.ex2;

import java.util.ArrayList;

public class Campeonato {
	Time a,b;
	int golsA, golsB;
	
	public Campeonato(Time a,Time b) {
		this.a = a;
		this.b = b;
	}
	
	public void iniciarJogo(){
		golsA = (int)(Math.random() * 7);
		golsB = (int)(Math.random() * 7);
		vencedor();
	}
	
	public void vencedor(){
		if(golsA == golsB){
			System.out.println("*** Empate***");
			System.out.println( a.informacoes() );
			System.out.println(" gosl: " + golsA);
			System.out.println(" ");
			System.out.println( b.informacoes() );
			System.out.println(" gosl: " + golsB);
		}else if(golsA >= golsB){
			System.out.println("*** Winner ***");
			System.out.println( a.informacoes() );
			System.out.println(" gosl: " + golsA);
		}else {
			System.out.println("*** Winner ***");
			System.out.println( b.informacoes() );
			System.out.println(" gosl: " + golsB);
			
		}
	}
	
}
