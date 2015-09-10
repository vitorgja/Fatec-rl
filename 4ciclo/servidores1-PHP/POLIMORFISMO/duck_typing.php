<?
	class Piada{
		public function ePato($p){
			$p->nadar();
			$p->voar();
			$p->aaa();
			echo "entao e pato";
		}
	}
	class Pato{
		public function $p->nadar(){
			echo "PATO nadar";
		}
		public function $p->voar(){
			echo "PATO NADAR";
		}
		public function $p->aaa(){
			echo "PATO aaa";
		}
	}
	class Humano{
		public function $p->nadar(){
			echo "Humano nadar";
		}
		public function $p->voar(){
			echo "Humano NADAR";
		}
		public function $p->aaa(){
			echo "Humano aaa";
		}
	}

	$pi = new Piada;
	$p = new Pato;
	$h = new Humano;

	$pi->ePato($p);//pato
	$pi->ePato($h);//
	$pi->ePato(5);

?>