package Taxas_Strategy22;

public abstract class Investimento {
	public double valor;
	private Taxavel t;
	public Investimento(double valor){
		this.valor = valor;
	}
	public void setT(Taxavel t){
		this.t = t;
	}
	
	abstract public void render();
	
	public void imposto(){
		valor *= t.calcImposto();
	}
	
	public void retirada(double qt){
		if(qt >= valor)
			valor -= qt;
	}
	public double getValor(){
		return valor;
	}
}
