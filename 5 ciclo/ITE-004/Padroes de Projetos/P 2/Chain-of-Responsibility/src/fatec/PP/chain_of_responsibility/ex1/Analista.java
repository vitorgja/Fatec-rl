package fatec.PP.chain_of_responsibility.ex1;

public class Analista extends Empresa{


	@Override
	public void aprovarVerba(Verba v) {
		// TODO Auto-generated method stub
		
		if( v.getValor() < 10000 ){
			mensagem();
		}else{
			this.cargos.aprovarVerba(v);
		}
	}
	
}
