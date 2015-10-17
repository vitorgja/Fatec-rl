package Taxas_Strategy;

public class ComTaxa implements Taxavel {
	
	@Override
	public double calcImposto(){
		return 0.9;
	}
}
