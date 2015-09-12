<?
	abstract class Cantor{
		protected $nome;
		public function __construct($nome){
			$this->nome = $nome;
		}
		abstract public function canto();
	}

	class Soprano extends Cantor{
		public function __construct($nome){
			parent::__construct($nome);
		}
		public function canto(){
			echo $this->nome." Canto: Feminino <br>";
		}
	}

	class Tenor extends Cantor{
		public function __construct($nome){
			parent::__construct($nome);
		}
		public function canto(){
			echo $this->nome." Canto: Masculino <br>";
		}
	}

	class Opera {
		private $cantores;
		public function __construct(){
			$this->cantores = array();
		}
		public function addCantor(Cantor $c){
			$this->cantores[] = $c;
		}
		public function iniciar(){
			foreach($this->cantores as $key){
				$key->canto(); 
			}
		}
	}

	$s1 = new Soprano("Josefina Da silva");
	$s2 = new Soprano("Jurema Da Solucao");

	$t1 = new Tenor("Joao Da silva");
	$t2 = new Tenor("Jose Da Solucao");

	$o = new Opera();
	$o->addCantor($s1);
	$o->addCantor($s2);
	$o->addCantor($t1);
	$o->addCantor($t2);
	$o->iniciar();

?>