package fatec.PP.chain_of_responsibility.ex1.refretion;

abstract public class Empresa {
	private Verba verba;	
	protected Empresa cargos;
	
	public void adicionarCargos(Empresa c){
		cargos = c;
	}
	
	abstract public void aprovarVerba(Verba v);
}
