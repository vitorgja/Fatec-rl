package fatec.PP.Exercicios3;

public enum FactoryFactory {
	
	
	FABRICAPOSTGRE {
		public void criarFabrica(){
			PostegreFactory pf = new PostegreFactory();	
		}
	};
	
	public abstract void criarFabrica();
	
}
