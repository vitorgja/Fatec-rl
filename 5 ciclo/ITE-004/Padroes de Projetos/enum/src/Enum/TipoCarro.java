package Enum;

import java.util.HashMap;

/*
 * 		TB_Tabela	
 * cd_carro | nm_carro	| cd_tipo
 * 		1	|  UmNome	|	135
 * 
 * 
 * 		TipoCarro
 * cd_tipo	| nm_tipo
 * 	  135	| HARTCH
 *	  249	| SEDAN
 */
public enum TipoCarro {
	LUXO(135,1.500), SEDAN(249,35.000), HATCH(542,25.600);
	
	private int cdBanco;
	private double valor;
	private static HashMap<Integer, TipoCarro> hs;
	
	private TipoCarro tipo;

	private TipoCarro(int cdBanco, double valor) {
		this.cdBanco = cdBanco;
		this.valor = valor;
	}
	
	private int getTipo(){
		return cdBanco;
	}
	private double getValor(){
		return valor;
	}
	
	public static void gerarMapa(){
		hs = new HashMap<Integer, TipoCarro>();
		hs.put(0, TipoCarro.SEDAN);
		hs.put(1, TipoCarro.LUXO);
		hs.put(2, TipoCarro.HATCH);
	}
	public static TipoCarro getTipoCarro(int x){
		return hs.get(x);
	}
	
	
	
}
