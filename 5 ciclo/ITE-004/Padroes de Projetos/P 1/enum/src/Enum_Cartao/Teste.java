package Enum_Cartao;

public class Teste {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		TiposCartoes.gerarMapa();
		Cartao c = new Cartao("Jose", 35, TiposCartoes.getTipoCartao(4));
		System.out.println(c.calcular() );
		
	}

}
