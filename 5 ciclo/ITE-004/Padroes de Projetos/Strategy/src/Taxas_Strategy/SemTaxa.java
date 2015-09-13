package Taxas_Strategy;

public class SemTaxa implements Taxavel {
	
	@Override
	public double calcImposto(){
		return 1;
	}
}
