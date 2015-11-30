package Trabalho.P2.ex1;

public class Futebol extends Atividade {
	
	public Futebol(){
		
		this.SetEquipamentos("bola");
	}
	
	public String GetTipo(){
		
		return "Futebol";
		
	}
	
	public void SetEquipamentos(String equipamento){
		
		this.equipamentos = equipamento;
	}
	
	public String GetEquipamentos(){
		
		return this.equipamentos;
	}
	
}
