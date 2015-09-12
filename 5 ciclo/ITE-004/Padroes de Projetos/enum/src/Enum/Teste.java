package Enum;

public class Teste {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		TipoCarro t = TipoCarro.LUXO;
		System.out.println("TIPO" + t);
		System.out.println("\n\n\n\n");
		
		TipoCarro.gerarMapa();
		Carro c = new Carro("FIAT", TipoCarro.getTipoCarro(1));
		c.mostrarInfo();
	}

}
