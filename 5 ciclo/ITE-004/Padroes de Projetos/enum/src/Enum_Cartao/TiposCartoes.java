package Enum_Cartao;

import java.util.HashMap;

import Enum_Carro.TipoCarro;

public enum TiposCartoes {
	NORMAL (0,0.05), SILVER (1,0.07), GOLD (2,0.10), PLATINUM (3,0.15), BLACK (4,0.30);
	
	private int cod;
	private double taxa;
	
	private static HashMap<Integer, TiposCartoes> hs;
	
	private TiposCartoes( int cod, double taxa){
		this.cod = cod;
		this.taxa = taxa;
	}
	
	public static void gerarMapa(){
		hs = new HashMap<Integer, TiposCartoes>();
		TiposCartoes[] tc = TiposCartoes.values();
		for(int i=0; i< tc.length; i++){
			hs.put(i, tc[i]);
		}
	}
	
	public double getTaxa(){
		return taxa;
	}
	
	public static TiposCartoes getTipoCartao(int x){
		return hs.get(x);
	}
}
