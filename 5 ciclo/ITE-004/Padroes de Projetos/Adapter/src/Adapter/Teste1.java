package Adapter;

public class Teste1 {

	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub

		Adicao a = new Adicao();
		System.out.println(a.operacao(6.0,7.0));
		
		OperacaoSimples d = new Divisao();
		System.out.println(d.operacao(1,2));
				
		OperacaoSimples e = new OperacaoAdapter();
		((OperacaoAdapter) e).setEq(new EquacaoSegundo());
		System.out.println(e.operacao(6,7));
	}

}
