package fatec.PP.decorator;

public class Cafe {
	private double preco;

	public Cafe(double preco) {
		super();
		this.preco = preco;
	}
	
	public double getPreco() {
		return this.preco;
	}
	
	public abstract void a();
}
