
public class Fila {

	protected int elementos[];
	protected int 	inic, //inicio da fila
					fim, //fim da fila
					qtde, //quantidade de elementos
					tam;

	//Fila (){}; Construtor padrão.
	Fila(int tamanho){
		tam = tamanho;
		elementos = new int[tam];
		fim = -1;
		inic = 0;
		qtde = 0;
	}
	public void insere(int x){
		fim++;
		if (fim == elementos.length){ // elementos.lenght (tamanho maximo do vetor)
			fim = 0;
		}
		elementos[fim] = x;
		qtde++;
	}
	public int remove(){
		int temp = elementos[inic];
		inic++;
		if (inic == elementos.length){
			inic = 0;
		}
		qtde--;
		return temp;
	}
	public int primeiro(){
		return elementos[inic];
	}
	boolean filacheia(){
		return qtde == elementos.length;
	}
	boolean filavazia(){
		return qtde == 0;
	}
	public int getInic() {
		return inic;
	}
	public int getFim() {
		return fim;
	}
	public int getQtde() {
		return qtde;
	}
	public int getTam(){
		return tam;
	}
	public int pegaValor(int pos){
		return elementos[pos];	
	}

}
