
public class Chocolate extends CafeDecorator{

	@Override
	public double calcPreco() {
		return 2.30 + cafe.calcPreco();
	}

}
