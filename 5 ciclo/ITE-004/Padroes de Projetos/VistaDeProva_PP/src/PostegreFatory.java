
public class PostegreFatory implements Absfactory{
	
	@Override
	public Banco criarBanco(){
		return new Posgre();
	}
}
