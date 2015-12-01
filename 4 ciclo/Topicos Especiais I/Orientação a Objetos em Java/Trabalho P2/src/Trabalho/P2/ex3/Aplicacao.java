package Trabalho.P2.ex3;
import java.awt.Color;
import java.awt.FlowLayout;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;

public class Aplicacao extends JFrame  implements ActionListener{
	private static final long serialVersionUID = 1L;
	
	//Declaracao de Objetos
	private JLabel resultado;
	private JTextField a,b,c;
	private JButton calcular;
	
	public Aplicacao() {
        super("Camo Cipher");
        
        //Define o container e o Layout
        setSize(300, 200);
        setResizable(false);
        setDefaultCloseOperation(EXIT_ON_CLOSE); 
        setLayout(new FlowLayout());
        
        // Instancia os Botoes, Label e Campo de Texto
        resultado = new JLabel("Resultado");
        resultado.setForeground(Color.red);
        
        a = new JTextField("A");
		a.setForeground(Color.green);
		a.setFont(new Font(" ", Font.BOLD,14));
		a.setSize(100, 10);
		a.setColumns(2);
		
		b = new JTextField("B");
		b.setForeground(Color.blue);
		b.setFont(new Font(" ", Font.BOLD,14));
		b.setSize(30, 10);
		b.setColumns(2);
		
		c = new JTextField("C");
		c.setForeground(Color.green);
		c.setFont(new Font(" ", Font.BOLD,14));
		c.setSize(30, 10);
		c.setColumns(2);
        
        calcular = new JButton("Calcular");
        
        // ADD ele Mesmo ao metodo que Detem as Acoes
        resultado.addComponentListener(null);
        a.addActionListener( this );
        b.addActionListener( this );
		c.addActionListener( this );
        calcular.addActionListener(this);
        
        // ADD Componentes no layout
        add(resultado);
        add(a);
        add(b);
        add(c);
        add(calcular);
	}

	public static void main(String[] args) {
		new Aplicacao().setVisible(true);;
	}

	@Override
	public void actionPerformed(ActionEvent e) {
		if(e.getSource() == calcular) {
			int a1,b1,c1;
			try{		    
				a1 = Integer.parseInt(a.getText());
				b1 = Integer.parseInt(b.getText());
				c1 = Integer.parseInt(c.getText());	
				
				double delta = ( (b1^2)-4 *a1*c1 );
				double x1 ,x2;
				x1 = ( (-b1)+Math.sqrt(delta) )/(2*a1);
				x2 = ( (-b1)-Math.sqrt(delta) )/(2*a1);
				if(delta>0){
					String aux = "x1: "+ format(x1) +"  x2: "+format(x2); 
					resultado.setText(aux);
				}else{
					resultado.setText("Sem Raiz Real");
				}	
			}catch( NumberFormatException z ){
				// z.printStackTrace();
				JOptionPane.showMessageDialog(this, "Verifique os Números Inseridos e Tente novamen!");
			}	
		}
	}
	/**
	 *	Arruma o tipo Double para 2 casa depois da virgula
	 *	@param double
	 *	@return String 
	 **/
	public static String format(double x) {  
	    return String.format("%.2f", x);  
	}  
}
