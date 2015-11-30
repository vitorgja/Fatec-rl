package Trabalho.P2.ex3;

import javax.swing.JFrame;
import javax.swing.*;

public class Aplicacao extends JFrame {
	public Aplicacao() {
        setTitle("Camo Cipher");
        setSize(WIDTH, HEIGHT);
        setVisible(true);
        setDefaultCloseOperation(EXIT_ON_CLOSE);  
	}

	public static void main(String[] args) {
		
		JFrame jf = new JFrame("Segundo Grau");
		SegundoGrau sg;
		int a,b,c;
		
		a = Integer.parseInt( JOptionPane.showInputDialog( "a: "));
		b = Integer.parseInt( JOptionPane.showInputDialog( "b: "));
		c = Integer.parseInt( JOptionPane.showInputDialog( "c: "));
		sg = new SegundoGrau(a, b, c);
		
		if( sg.hasRaiz() ){
			double x1,x2;
			x1 = sg.getX1();
			x2 = sg.getX2();
			System.out.println( "x1: " + x1 );
			System.out.println( "x2: " + x2 );
		}else{
			JOptionPane.showConfirmDialog(null, "Sem Raiz Real");
			System.out.println("Sem Raiz Real");
		}
	}

}
