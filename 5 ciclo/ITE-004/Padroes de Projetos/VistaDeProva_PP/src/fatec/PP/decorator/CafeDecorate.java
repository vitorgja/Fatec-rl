package fatec.PP.decorator;

public class CafeDecorate extends Cafe {
	protected Cafe adicional; //prox
	
	public CafeDecorator(double preco){
		super(preco);
		
	}
}
