
public class DuplaFila extends Fila  { //Extends, recebe como herança as aplicações de outra classe. Para isso os atributos devem ser "protected".

	
	public DuplaFila(int tamanho){
		super(tamanho);
	}
	public void insereInicio(int x){
		inic--;
		if (inic == -1)
			inic = elementos.length-1;
		elementos[inic] = x;
		qtde++;
	}
	public int removeFim(){
		int temp = elementos[fim];
		fim--;
		if (fim == -1)
			fim = elementos.length-1;
		return temp;
}
	public int ultimo(){
		return elementos[fim];
	}
	

}	
