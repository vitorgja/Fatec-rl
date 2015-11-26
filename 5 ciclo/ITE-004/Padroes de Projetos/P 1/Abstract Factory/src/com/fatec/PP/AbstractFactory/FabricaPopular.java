package com.fatec.PP.AbstractFactory;

public class FabricaPopular implements FabricaCarro{
	
	@Override
	public Carro criarCarro(String nome, Localidade localidade){
		return new Popular(nome, localidade);
	}
}
