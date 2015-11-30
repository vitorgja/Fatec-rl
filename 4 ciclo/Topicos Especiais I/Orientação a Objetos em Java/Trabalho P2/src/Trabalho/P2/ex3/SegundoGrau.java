package Trabalho.P2.ex3;


public class SegundoGrau {

	private int a,b,c,x1,x2,delta;

	public SegundoGrau(int a, int b,int c) {
		this.a = a;
		this.b = b;
		this.c = c;
	}
	public double calcDelta(){
		// /\ =   (-b)2 -4*a*c
		return (b^2)-4*a*c;
	}
	public boolean hasRaiz(){
		return ( calcDelta() > 0 )? true : false;
	}
	public double getX1(){
		return ( (-b)+Math.sqrt( calcDelta() ))/2*a; 
	}
	public double getX2(){
		return ( (-b)-Math.sqrt( calcDelta() ))/2*a; 
	}
	
	
	

}
