package Trabalho.P2.ex1;

public class Karate extends Atividade {
	
	public Karate(){
		
		this.SetEquipamentos("Kimono");
	}
	
	public String GetTipo(){
		
		return "Karate";	
	}
	
	public void SetEquipamentos(String equipamento){
		
		this.equipamentos = equipamento;
	}
	
	public String GetEquipamentos(){
		
		return this.equipamentos;
	}

}

