package Listas;

public class Exercicio_05 {

	public static void main(String[] args) {
		
		// 5. Calcular e mostrar o seguinte produto: 1.2.3.4.5 
		
		// variaveis
		int iFor,iWhile=1, iDoWhile=1, result=1;
		
		//for
		for(iFor=1;iFor<=5;iFor++){
			result=result*iFor;
			if(iFor!=5){
				System.out.print(iFor+"*");
			}else{
				System.out.println(iFor+"= "+result);
			}
		}
		
		//while
		result=1;
		while(iWhile<=5){
			result=result*iWhile;
			if(iWhile!=5){
				System.out.print(iWhile+"*");
			}else{
				System.out.println(iWhile+"= "+result);
			}
			iWhile++;
		}
		
		//iDoWhile
		result=1;
		do{
			result=result*iDoWhile;
			if(iDoWhile!=5){
				System.out.print(iDoWhile+"*");
			}else{
				System.out.println(iDoWhile+"= "+result);
			}
			iDoWhile++;
		}while(iDoWhile<=5);

	}

}
