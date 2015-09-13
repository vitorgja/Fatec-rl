package com.fatec.PP.AbstractFactory;

@FunctionalInterface
public interface FabricaCarro {
	Carro criarCarro(String nome, Localidade localidade);
}
