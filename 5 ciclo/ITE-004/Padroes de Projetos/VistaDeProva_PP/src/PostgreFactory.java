
public class PostgreFactory implements AbsFactory{

	@Override
	public Banco criarBanco() {
		return new Postgre();
	}

}
