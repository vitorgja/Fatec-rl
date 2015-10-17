package fatec.PP.Exercicios2;

public enum DiaTrabalhado {
	DOMINGO {
		public double getSal(){
			return 2;
		}
	}, SABADO {
		public double getSal(){
			return 1.7;
		}
	},OTROS {
		public double getSal(){
			return 1;
		}
	};
	abstract double getSal();
}
