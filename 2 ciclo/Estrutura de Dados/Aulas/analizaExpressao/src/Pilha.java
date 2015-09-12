
public class Pilha {
	private Node topo;
	Pilha(){
		topo = null;//construtor da classe
	}
	public void empilha(char x){//procedimento de empilhar
		Node aux = new Node();
		aux.info = x;
		aux.prox = topo;
		topo = aux;
	}
	public char desempilha(){//procedimento de desempilhar
		char temp = topo.info;
		topo = topo.prox;
		return temp;
	}
	public char elementodotopo(){//retorna o elemento do topo
		return topo.info;
	}
	public boolean pilhavazia(){
		return topo == null;	  
	}
	public void mostrapilha(){
		Node aux = topo;
		while(aux != null){
			System.out.println(aux.info);
			aux = aux.prox;
		}
	}
	public Node getTopo() {
		return topo;
	}
}


	
	

