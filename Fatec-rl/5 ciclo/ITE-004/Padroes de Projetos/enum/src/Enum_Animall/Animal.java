package Enum_Animall;

public enum Animal {
	CAT {
		@Override
		public void emitirSom(){
			System.out.println("miau Miau");
		}
	},	
	DOG {
		@Override
		public void emitirSom(){
			System.out.println("uAUAU");
		}
	},	
	DUCK {
		@Override
		public void emitirSom(){
			System.out.println("ISSO È UM PATO");
		}
	},;
	
	abstract public void emitirSom();
}
