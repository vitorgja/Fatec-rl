package Taxas_Strategy;

public class Fundos extends Investimento {

	public Fundos(double valor) {
		super(valor);
		// TODO Auto-generated constructor stub
	}

	@Override
	public void render() {
		// TODO Auto-generated method stub
		valor = valor * ( 1+Math.random() );
	}

}
