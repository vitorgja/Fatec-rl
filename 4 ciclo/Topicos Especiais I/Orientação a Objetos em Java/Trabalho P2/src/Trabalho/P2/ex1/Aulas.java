package Trabalho.P2.ex1;

public enum Aulas {
	MUSCULACAO(){
		@Override
		public String executarAtividade(){
			return "Levantando Pesos";
		}
	},
	AEROBICA(){

		@Override
		public String executarAtividade() {
			// TODO Auto-generated method stub
			return "Fazendo Atividade Aerobica";
		}
		
	};
	
	abstract public String executarAtividade();
}
