
public class Teste {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		
		Singleton s = Singleton.getInstance();
		Singleton t = Singleton.getInstance();
		System.out.println(s);
		System.out.println(t);
		
		//Singleton s = Singleton.getInstance();
	
	}

}
