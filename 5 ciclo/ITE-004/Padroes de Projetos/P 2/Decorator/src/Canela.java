


public class Canela extends CafeDecorator{

	@Override
	public double calcPreco() {
		return 0.70+cafe.calcPreco();
	}
	

}
