package com.fatec.PP.AbstractFactory;

public class Carro {
	private String nome;
	private Localidade localidade;
	
	Carro(String nome, Localidade localidade) {
		super();
		this.nome = nome;
		this.localidade = localidade;
	}

	@Override
	public String toString(){
		
		return "Nome: " + nome + " | Localidade: " + localidade;
	}
}
