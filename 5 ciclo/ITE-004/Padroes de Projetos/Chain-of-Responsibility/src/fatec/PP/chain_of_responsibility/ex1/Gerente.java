package fatec.PP.chain_of_responsibility.ex1;

public class Gerente extends Empresa{


	@Override
	public void aprovarVerba(Verba v) {
		// TODO Auto-generated method stub
		
		if( v.getValor() < 25000 ){
			mensagem();
		}else{
			this.cargos.aprovarVerba(v);
		}
	}
	
}