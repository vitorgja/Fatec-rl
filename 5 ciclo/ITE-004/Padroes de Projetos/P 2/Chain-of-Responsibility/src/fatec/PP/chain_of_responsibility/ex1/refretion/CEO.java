package fatec.PP.chain_of_responsibility.ex1.refretion;

public class CEO extends Empresa {

	@Override
	public void aprovarVerba(Verba v) {
		// TODO Auto-generated method stub
		
		System.out.println("Verba Aprovado pelo Gerente");
	}
	
}
