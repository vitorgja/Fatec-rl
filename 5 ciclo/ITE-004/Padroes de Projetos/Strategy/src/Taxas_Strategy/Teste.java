package Taxas_Strategy;

public class Teste {
	
	public static void main (String arg[]){
		
		Fundos i = new Fundos(1000.0);
		i.render();
		i.render();
		
		System.out.println("RENDIMENTO: " +i.getValor() );
		
		
		i.setT(new ComTaxa());
		i.imposto();
		System.out.println("RENDIMENTO: " +i.getValor() );
		
		
		
	}
}
