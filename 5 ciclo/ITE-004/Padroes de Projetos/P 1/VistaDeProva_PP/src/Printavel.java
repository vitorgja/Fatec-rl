
public class Printavel {
	private Linguagem l;

	public void setL(Linguagem l) {
		this.l = l;
	}
	
	public void doPrint(String msg){
		l.print(msg);
	}
}
