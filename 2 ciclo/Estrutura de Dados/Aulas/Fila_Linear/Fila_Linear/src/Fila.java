
public class Fila {

	private int inic,fim,qtde,elementos[];
	
	Fila(int tamanho){
		inic=0;
		fim=-1;
		elementos= new int[tamanho];
	}
	void insere(int x){
		qtde++;
		inic++;
		if(qtde==elementos.length){
			elementos[inic]=x;
		}
	}
	int remove(){
		int temp = elementos[inic];
		inic++;
		if(inic==elementos.length){
			inic=0;
		}
		qtde--;
		return temp;
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

	
	
}
