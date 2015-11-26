package fatec.PP.chain_of_responsibility.ex1;

abstract public class Empresa {
	private Verba verba;
	private String classNome;
	protected Empresa cargos;
		
	public void adicionarCargos(Empresa c){
		cargos = c;
	}
	
	abstract public void aprovarVerba(Verba v);
	
	
	public void mensagem(){
		Class c = this.getClass();
		System.out.println("Verba Aprovado pelo " + c.getSimpleName() );
	}
}
