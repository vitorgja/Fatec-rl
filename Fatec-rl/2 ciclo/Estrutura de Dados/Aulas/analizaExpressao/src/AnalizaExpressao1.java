
import java.util.Scanner;
/**
 * *
 * @author Vitor
 *
 */
public class AnalizaExpressao1 {

	public static void main(String[] args) {
		// Variaveis
		Scanner entrada = new Scanner(System.in);
		Pilha p = new Pilha();
		String Expressao,Simb;
		char Simbolo;
    	int i=0;
    	boolean Valido = true;
    	
    	/* Entrada da string*/
    	System.out.println("Digite a expressao abaixo");
    	Expressao = entrada.nextLine();
    	System.out.println("");
    	
    	System.out.println("Minha Expressao: \n" + Expressao);
    	
    	/* Loop ate o fim da String */
    	while(i<= ((Expressao.length())-1)){
    		/* percorre a String pela ponteiro i */
    		Simb = (Expressao.substring(i, i+1));
    		/* converte tem char*/
    		Simbolo = Simb.charAt(0);
    		
    		    		
    		// /* Verifica se abriu { ou [ ou ( * /
    		if ((Simbolo=='{')||(Simbolo=='[')||(Simbolo=='(')){
    				p.empilha(Simbolo);
    				System.out.println("empilho"+Simbolo);
    		}else{
    			/* Verifica se Fecho ) ou ] ou } */
    			if((Simbolo=='}')||(Simbolo==']')||(Simbolo==')')){
    				if(p.pilhavazia()){
    					Valido=false;
    				}else{
    					
    					/* verifica se o simbolo em que esta no loop é o primeiro da Pilha */
    					if((Simbolo=='}') && (p.elementodotopo()=='{')){
    						System.out.println("desempiho "+p.desempilha());
    					}else if((Simbolo==']') && (p.elementodotopo()=='[')){
    						System.out.println("desempiho "+p.desempilha());
    					}else if((Simbolo==')') && (p.elementodotopo()=='(')){
    						System.out.println("desempiho "+p.desempilha());
    					}
    				}
    			}
    			
    		}
    		    		
    		i++;
		}
    	if(p.pilhavazia()){
			Valido=true;
			System.out.println("Pilha VAZIA");
		}else{
			Valido=false;
			System.out.println("PILHA CHEIA");
		}
    	if(p.pilhavazia() && Valido){
    		
    		p.mostrapilha();
    		System.out.println("Expressão Correta");
    		System.out.println("Pilha Vazia = "+p.pilhavazia());
    		System.out.println("Valido = "+Valido);
    	}else{
    		System.out.println("Expressão Incorreta");
    		System.out.println("Pilha Vazia = "+p.pilhavazia());
    		System.out.println("Valido = "+Valido);
    	}
    	
    	
    	entrada.close();
	}

}
