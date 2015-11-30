package Trabalho.P2.ex1;

public abstract class Atividade {
	
	public String equipamentos;
	
	public abstract String GetTipo();
	
	public abstract String GetEquipamentos();
	
	public void SetEquipamentos(String equipamento){
		
		this.equipamentos = equipamento;
	}
	
	
}
