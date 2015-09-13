/**
 * 
 * @author Vitor
 *
 */
public class Fila {

	protected int elementos[];
	protected int 	inic, //inicio da fila
					fim, //fim da fila
					qtde, //quantidade de elementos
					tam;
	/**
	 * Construtor da Classe Fila
	 * @param tamanho int
	 */
	//Fila (){}; Construtor padrão.
	Fila(int tamanho){
		tam = tamanho;
		elementos = new int[tam];
		fim = -1;
		inic = 0;
		qtde = 0;
	}
	/**
	 * Insere um elemento na Fila
	 * @param x int
	 */
	public void insere(int x){
		fim++;
		if (fim == elementos.length){ // elementos.lenght (tamanho maximo do vetor)
			fim = 0;
		}
		elementos[fim] = x;
		qtde++;
	}
	
	/**
	 * Remove um elemento da fila e o retorna
	 * @return int
	 */
	public int remove(){
		int temp = elementos[inic];
		inic++;
		if (inic == elementos.length){
			inic = 0;
		}
		qtde--;
		return temp;
	}
	
	/**
	 * Primeiro elemento da fila
	 * @return int
	 */
	public int primeiro(){
		return elementos[inic];
	}
	
	/** 
	 * Se a pilha estiver cheia retorna true, 
	 * se nao estiver retorna false
	 * @return boolean 
	 */
	boolean filacheia(){
		return qtde == elementos.length;
	}
	
	/**
	 * Se apilha estiver Vazia retorn true,
	 * se nao estiver retorna false
	 * @return boolean
	 */
	boolean filavazia(){
		return qtde == 0;
	}
	
	/**
	 * Retorna o valor da variavel Inic
	 * @return int
	 */
	public int getInic() {
		return inic;
	}
	
	/**
	 * Retorna o valor da variavel fim
	 * @return int
	 */
	public int getFim() {
		return fim;
	}
	
	/**
	 * Retorna o valor da variavel qtde
	 * @return int
	 */
	public int getQtde() {
		return qtde;
	}
	
	/**
	 * Retorna o valor da variavel tam
	 * @return int
	 */
	public int getTam(){
		return tam;
	}
	
	/**
	 * Retorna o valor de um elemento do vetor
	 * @param pos int
	 * @return int
	 */
	public int pegaValor(int pos){
		return elementos[pos];	
	}

}
