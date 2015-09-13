import java.util.Scanner;

public class ListaLinear {
		static int p=-1,qtde=0;		
		static int list[] = new int[11];
		
		void insere(int x){
			p++;
			list[p] = x;
			qtde++;
				
		}
		
		void remove(){
				
			p--;
			qtde--;
						
		}
		
		int pegaqtde(){
			return qtde;
		}
		
		int pegavalor(){
			return p;
		}
		
		boolean listacheia(){
			if(qtde==10){
				return true;
			}else{
				return false;
			}
		}
		
		public static void main(String[] args) {
			int opc=0;
			Scanner entrada = new Scanner(System.in);
			
			do{
				System.out.print("OPC:");
				entrada.nextInt();
				
				switch(opc){
				case 3:
					//System.out.println( pegaqtde() );
					break;
				}
			}while(opc==3);
			
			
			
			entrada.close();
			
			
		
		}

}
