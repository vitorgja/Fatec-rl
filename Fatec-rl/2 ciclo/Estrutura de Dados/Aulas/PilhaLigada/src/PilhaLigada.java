
public class PilhaLigada {
	private Node topo;

	PilhaLigada(){
		topo = null;
	}

	public Node getTopo() {
		return topo;
	}

	public boolean pilhavazia(){
		return topo==null;	  
	}
	public void empilha(int x){
		Node aux = new Node();
		aux.info = x;
		aux.prox = topo;
		topo = aux;
	}
	public int desempilha(){
		int temp = topo.info;
		topo=topo.prox;
		return temp;
	}
	public int elementodotopo(){
		return topo.info;

	}

}
