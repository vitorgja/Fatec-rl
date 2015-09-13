package Adapter;

public class Adicao implements OperacaoSimples {
	@Override
	public String operacao(double a,double b){
		return "Adiçaõ e: "+ String.valueOf(a+b);
	}
}
