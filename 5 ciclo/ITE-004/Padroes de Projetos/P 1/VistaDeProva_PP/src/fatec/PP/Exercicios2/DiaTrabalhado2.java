package fatec.PP.Exercicios2;

public enum DiaTrabalhado2 {
	DOMINGO , SABADO , OUTROS ;
	
	private double salario;
	
	
	
	
	public double getSal(){
			return salario;
	}
	
	private DiaTrabalhado2(double salario){
		this.salario = salario;
	}
	
}
