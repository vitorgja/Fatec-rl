package Listas;

public class Exercicio_12_2 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		// TODO Auto-generated method stub
		double c = 0, x = -1, s = 0, PI = 0;

		while(c < 51){
			c = c + 1;
			x = x + 2;
			
			if(c%2==1){
				s = s + 1/(Math.pow(c, 3));
				PI = Math.cbrt(s*32);
			}
		}
		System.out.println("O valor aproximado de PI é: "+PI);
	}

}
