package Trabalho.P2.ex1;

public class AplicaAcademia {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Academia acade = new Academia();
		
		acade.addAulas(Aulas.AEROBICA.executarAtividade());
		acade.addAulas(Aulas.MUSCULACAO.executarAtividade());
		acade.executarAtividades();
	}

}
