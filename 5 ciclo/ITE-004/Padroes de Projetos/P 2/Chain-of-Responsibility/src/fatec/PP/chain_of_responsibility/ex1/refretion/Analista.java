package fatec.PP.chain_of_responsibility.ex1.refretion;

public class Analista extends Empresa{

	@Override
	public void aprovarVerba(Verba v) {
		// TODO Auto-generated method stub
		
		if( v.getValor() < 10000 ){
			System.out.println("Verba Aprovado pelo Analista");
		}else{
			this.cargos.aprovarVerba(v);
		}
	}
	
}
