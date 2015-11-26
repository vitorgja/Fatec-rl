package Taxas_Strategy22;

public class Teste {
	
	public static void main (String arg[]){
		
		Fundos i = new Fundos(1000.0);
		
		Taxavel t = ()->{
			return 1;
		};
		i.setT(t);
		
		i.imposto();
		System.out.println("RENDIMENTO: " +i.getValor() );
		
		
		
	}
}
