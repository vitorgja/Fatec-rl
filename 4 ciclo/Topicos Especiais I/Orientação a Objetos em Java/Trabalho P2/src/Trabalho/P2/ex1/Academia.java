package Trabalho.P2.ex1;

import java.util.ArrayList;

public class Academia {
	
	private ArrayList<String> aulas;
	
	public void addAulas(String aulas){
		this.aulas.add(aulas);
	}
	
	public void executarAtividades(){
		for (String a : aulas) {
			System.out.println( a );
		}
	}
}
