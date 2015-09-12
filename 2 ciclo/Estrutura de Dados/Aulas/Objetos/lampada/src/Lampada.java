
public class Lampada {
	boolean status;
	
	void acende() {
		status = true;
	}
	void apaga(){
		status = false;
	}
	boolean pegarStatus(){
		return status;
	}
}
