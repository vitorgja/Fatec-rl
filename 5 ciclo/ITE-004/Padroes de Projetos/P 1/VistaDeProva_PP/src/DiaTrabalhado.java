



public enum DiaTrabalhado {
	DOMINGO(2), SABADO(1.7), OUTROS(1);
	
	private double salario;

	public double getSalario() {
		return salario;
	}

	private DiaTrabalhado(double salario) {
		this.salario = salario;
	}
	
}
