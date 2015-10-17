package com.fatec.PP.AbstractFactory;

public class FabricaLuxo implements FabricaCarro{
	
	@Override
	public Carro criarCarro(String nome, Localidade localidade){
		return new Luxo(nome, localidade);
	}
}
