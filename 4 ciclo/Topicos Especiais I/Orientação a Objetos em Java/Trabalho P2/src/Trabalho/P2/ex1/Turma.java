package Trabalho.P2.ex1;
import java.util.ArrayList;

public class Turma {
	
	private String periodo;
	private String horario;
	private ArrayList<Aluno> Alunos = new ArrayList<Aluno>();
	private Atividade atividade;
	
	
	public Turma(Atividade atividade, String periodo, String horario) {
		
		this.atividade = atividade;
		this.periodo = periodo;
		this.horario = horario;
	}
	
	public void AdicionarAlunos(Aluno aluno){
		
		Alunos.add(aluno);
	}
	
	public void ShowAlunos(){
		
		 System.out.println("----- Alunos -----");
		
		for(int i=0;i<this.Alunos.size();i++){  
			 
			  System.out.println(this.Alunos.get(i).GetNome());
   
		}  
	}
	
	// Métodos Get
	
	public Object getAlunos(){
		
		return Alunos;
	}
	
	public String GetPeriodo(){
		
		return this.periodo;
	}
	
	public String GetHorario(){
		
		return this.horario;
	}
	
	public String GetAtividade(){
		
		return this.atividade.GetTipo();
	}
	
	public String GetEquipamentos(){
		
		return this.atividade.GetEquipamentos();
	}
	
	// Métodos Set
	
	public void SetPeriodo(String novoperiodo){
		
		this.periodo = novoperiodo;
	}
	
	public void SetHorario(String novohorario){
		
		this.horario = novohorario;
	}

}
