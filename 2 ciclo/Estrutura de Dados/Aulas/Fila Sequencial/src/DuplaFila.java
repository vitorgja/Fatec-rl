/**
 * 
 * @author Vitor
 *
 */
public class DuplaFila extends Fila  { //Extends, recebe como herança as aplicações de outra classe. Para isso os atributos devem ser "protected".

	/**
	 * Construtor da Classe DuplaFila
	 * @param tamanho
	 */
	public DuplaFila(int tamanho){
		super(tamanho);
	}
	
	/**
	 * Insere um elemento no inicio da Fila
	 * @param x int
	 */
	public void insereInicio(int x){
		inic--;
		if (inic == -1)
			inic = elementos.length-1;
		elementos[inic] = x;
		qtde++;
	}
	
	/**
	 * Remove do Fim da fila e retorna o elemento retornado
	 * @return int
	 */
	public int removeFim(){
		int temp = elementos[fim];
		fim--;
		if (fim == -1)
			fim = elementos.length-1;
		return temp;
	}
	
	/**
	 * Ultimo elemento da Fila
	 * @return int
	 */
	public int ultimo(){
		return elementos[fim];
	}
	

}	
