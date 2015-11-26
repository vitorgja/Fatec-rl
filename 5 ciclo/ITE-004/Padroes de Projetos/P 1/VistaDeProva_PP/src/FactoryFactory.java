
public enum FactoryFactory {
	FABRICAPOSTGRE{
		public void criarFabrica(){
			PostgreFactory pf = new PostgreFactory();
			Postgre p = (Postgre) pf.criarBanco();
			p.abrirConexao("rootP", "rootP");
		}
	};
	
	public abstract void criarFabrica();
}
