package Taxas_Strategy22;

public class Poupanca extends Investimento {

	public Poupanca(double valor) {
		super(valor);
		// TODO Auto-generated constructor stub
	}

	@Override
	public void render() {
		// TODO Auto-generated method stub
		valor = valor * 1.006;
	}

}
