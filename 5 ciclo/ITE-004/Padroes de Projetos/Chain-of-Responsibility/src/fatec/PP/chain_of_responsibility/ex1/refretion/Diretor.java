package fatec.PP.chain_of_responsibility.ex1.refretion;

public class Diretor extends Empresa {

	@Override
	public void aprovarVerba(Verba v) {
		// TODO Auto-generated method stub
		
		if( v.getValor() < 50000 ){
			System.out.println("Verba Aprovado pelo Gerente");
		}else{
			this.cargos.aprovarVerba(v);
		}
	}
	
}