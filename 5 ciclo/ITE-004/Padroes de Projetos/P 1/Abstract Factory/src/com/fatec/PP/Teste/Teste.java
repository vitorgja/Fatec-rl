package com.fatec.PP.Teste;

import com.fatec.PP.AbstractFactory.*;

public class Teste {
	public static void main(String[] args){
		Carro l = FabricaFacrica.LUXO.fabricarCarro();
		Carro p = FabricaFacrica.POPULAR.fabricarCarro();
		Carro s = FabricaFacrica.SEDAN.fabricarCarro();
		
		System.out.println(l);
		System.out.println(p);
		System.out.println(s);
	}
}
