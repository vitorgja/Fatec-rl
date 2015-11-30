package Trabalho.P2.ex3;

import java.awt.Color;
import java.awt.FlowLayout;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;

public class Aplicacao extends JFrame  implements ActionListener{
	
	private static final long serialVersionUID = 1L;
	
	private JLabel a,b,c;
	private JButton calcular;
	
	public Aplicacao() {
        super("Camo Cipher");
        setSize(300, 200);
        setResizable(false);
        setDefaultCloseOperation(EXIT_ON_CLOSE); 
        setLayout(new FlowLayout());
        
        a = new JLabel("A");
		a.setForeground(Color.green);
		a.setFont(new Font(" ", Font.BOLD,14));
		
		b = new JLabel("B");
		b.setForeground(Color.blue);
		b.setFont(new Font(" ", Font.BOLD,14));
		
		c = new JLabel("C");
		c.setForeground(Color.green);
		c.setFont(new Font(" ", Font.BOLD,14));
        
        calcular = new JButton("Calcular");
        
        // a.addActionListener( this );
        // b.addActionListener( this );
		// c.addActionListener( this );
        calcular.addActionListener(this);
        
        add(calcular);
        add(a);
        add(b);
        add(c);
	}

	public static void main(String[] args) {
		
		new Aplicacao().setVisible(true);;
		
	}

	@Override
	public void actionPerformed(ActionEvent e) {
		
		if(e.getSource() == calcular) {
			
		}
		
	}

}
