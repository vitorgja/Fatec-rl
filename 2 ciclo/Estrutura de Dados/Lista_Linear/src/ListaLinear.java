public class ListaLinear {
	
		private int lista[];
		private int p; //posicao do vetor
		private int qtde; //quantidade de elemento no vetor
		
		ListaLinear(){
			lista = new int[10];
			p=-1;
			qtde=0;
		}
		
			public void insere(int x){
			p++;
			lista[p] = x;
			qtde++;
		}
		
		public boolean listacheia(){
			if(qtde == 10)//==relacional
				return true;
			else
				return false;
		}
		public boolean listavazia(){
			if(qtde == 0){
				return true;
			}else{
				return false;
			}
		}
		
	
		public void remove(){
			p--;
			qtde--;
		}
		
		public int pegaqtde(){
			return qtde; //uma classe é um conjunto de objetos que compartilham 
		}
		public int pegavalordeP(){
			return p;
		}
		
		public int pegavalor(int posicao){
			return lista[posicao];
		}
	
}
	
	
	//public static void main(String[] args){//interir um elemento nesse vetor
		//para montar um vetor int lista[] = new int[10]; //declarado uma variavel e o tamanho dela
		
