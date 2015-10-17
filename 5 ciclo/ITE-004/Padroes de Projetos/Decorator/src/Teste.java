
public class Teste {

	public static void main(String[] args) {
		Expresso e = new Expresso();
		
		Chocolate ch = new Chocolate();
		
		Chocolate ch1 = new Chocolate();
		
		Canela cn = new Canela();
		
		ch.setAdicional(e);
		ch1.setAdicional(ch);
		cn.setAdicional(ch1);
		
		System.out.println(cn.calcPreco());
	}

}
