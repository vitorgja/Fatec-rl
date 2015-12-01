package Trabalho.P2.ex1;

public class Academia {

	public static void main(String[] args) {
		
		Turma turma1 = new Turma(new Futebol(),"matutino","13:00");
		turma1.AdicionarAlunos(new Aluno("José","536769896",15));
		turma1.AdicionarAlunos(new Aluno("Fernando","139189896",17));
		System.out.println(turma1.GetPeriodo());
		System.out.println(turma1.GetHorario());
		System.out.println(turma1.GetAtividade());
		System.out.println(turma1.GetEquipamentos());
		turma1.ShowAlunos();
	}
}
