


abstract public class CafeDecorator extends Cafe{
	
	//Se eu quiser Expresso com Canela
	//Devo guardar a instancia de Expresso
	//aqui neste atributo
	protected Cafe cafe; //prox
	
	//Seto no teste qual o proximo
	//da cadeia
	public void setAdicional(Cafe cafe) {
		this.cafe = cafe;
	}
	
}
