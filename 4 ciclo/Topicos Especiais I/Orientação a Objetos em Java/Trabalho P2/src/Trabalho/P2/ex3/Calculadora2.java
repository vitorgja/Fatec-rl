package Trabalho.P2.ex3;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Calculadora2 extends JFrame implements ActionListener{
	JLabel l1,l2,l3;
	JButton b1,b2,b3,b4,b5,b6,b7,b8,b9;
	JTextField t1,t2,t3;
	
	public static void main(String args[]){
		JFrame janela2 = new Calculadora2();
		janela2.show();
		
		WindowListener x = new WindowAdapter() {
			public void windowClosing(WindowEvent fecha){
				System.exit(0);
			}
		};
		janela2.addWindowListener(x);
	}
	
	public Calculadora2() {
		setTitle("Calculadora");
		setSize(400,120);
		getContentPane().setBackground(new Color(0,0,0));
		getContentPane().setLayout(new GridLayout(4, 4));
		
		l1 = new JLabel("N1");
		l1.setForeground(Color.green);
		l1.setFont(new Font(" ", Font.BOLD,14));
		
		l2 = new JLabel("N2");
		l2.setForeground(Color.blue);
		l2.setFont(new Font(" ", Font.BOLD,14));
		
		l3 = new JLabel("Resultado");
		l3.setForeground(Color.green);
		l3.setFont(new Font(" ", Font.BOLD,14));
		
		b1 = new JButton("+");
		b1.setBackground(Color.black);
		b1.setForeground(Color.white);

		b2 = new JButton("-");
		b2.setBackground(Color.black);
		b2.setForeground(Color.white);

		b3 = new JButton("*");
		b3.setBackground(Color.black);
		b3.setForeground(Color.white);

		b4 = new JButton("/");
		b4.setBackground(Color.black);
		b4.setForeground(Color.white);

		b5 = new JButton("Limpar");
		b5.setBackground(Color.black);
		b5.setForeground(Color.white);

		b6 = new JButton("Potencia");
		b6.setBackground(Color.black);
		b6.setForeground(Color.white);

		b7 = new JButton("raiz");
		b7.setBackground(Color.black);
		b7.setForeground(Color.white);
		
		b8 = new JButton("inverso");
		b8.setBackground(Color.black);
		b8.setForeground(Color.pink);

		b9 = new JButton("aleatorio");
		b9.setBackground(Color.black);
		b9.setForeground(Color.white);
		
		b1.addActionListener( this );
		b1.addActionListener( this );
		b2.addActionListener( this );
		b3.addActionListener( this );
		b4.addActionListener( this );
		b5.addActionListener( this );
		b6.addActionListener( this );
		b7.addActionListener( this );
		b8.addActionListener( this );
		b9.addActionListener( this );
		
		t1 = new JTextField();
		t1.setBackground(Color.BLACK);
		t1.setForeground(Color.white);
		
		t2 = new JTextField();
		t2.setBackground(Color.BLACK);
		t2.setForeground(Color.white);
		
		t3 = new JTextField();
		t3.setBackground(Color.BLACK);
		t3.setForeground(Color.white);
		t3.setEditable(false);
		
		getContentPane().add( l1 );
		getContentPane().add( t1 );
		getContentPane().add( b1 );
		getContentPane().add( b2 );
		getContentPane().add( l2 );
		getContentPane().add( t2 );
		getContentPane().add( b3 );
		getContentPane().add( b4 );
		getContentPane().add( l3 );
		getContentPane().add( t3 );
		getContentPane().add( b5 );
		getContentPane().add( b6 );
		getContentPane().add( b7 );
		getContentPane().add( b8 );
		getContentPane().add( b9 );
		
	}
	public void actionPerformed(ActionEvent e){
		if ( e.getSource() == b5 ){
			t1.setText(" ");
			t2.setText(" ");
			t3.setText(" ");
			return;
		}
		
		double n1=0, n2=0, resultado=0;
		try {
			n1 = Double.parseDouble( t1.getText() );
			n2 = Double.parseDouble( t2.getText() );
		} catch( NumberFormatException erro ){
			t3.setText("erro");
			return;
		}
		
		if( e.getSource()== b1 ){
			resultado = n1 + n2;
		}else if( e.getSource()== b2 ){
			resultado = n1 - n2;
		}else if( e.getSource()== b3 ){
			resultado = n1 * n2;
		}else if( e.getSource()== b4 ){
			resultado = n1 / n2;
		}else if( e.getSource()== b6 ){
			int z = (int)n2;
			resultado = Math.pow(n1, z);
		}else if( e.getSource()== b7 ){
			resultado = Math.sqrt(n2);
		}else if( e.getSource()== b8 ){
			resultado = 1 / n1;
		}else if( e.getSource()== b9 ){
			resultado = (int) ( Math.random()*n2 );
		}
		
		t3.setText(""+(float)resultado);
		
	}
	
}
