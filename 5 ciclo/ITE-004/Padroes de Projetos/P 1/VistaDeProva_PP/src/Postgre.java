




public class Postgre implements Banco{
	Postgre() {}
	@Override
	public void abrirConexao(String usu, String senha) {
		if(usu.equals("rootP") && senha.equals("rootP")){
			System.out.println("Conex�o aberta");
		}else{
			System.out.println("Erro");
		}
	}

}
