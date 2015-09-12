<?
abstract class Quadrilatero{
	protected $lado;

	public function __construct($l){
		$this->lado = $l;
	}
	public abstract function calcArea();
	public abstract function calcPerim();
}
class Quadrado extends Quadrilatero{
	public function calcArea(){
		return $this->lado * $this->lado;
	}
	public function calcPerim(){
		return 4*$this->lado;
	}
}
class Retangulo extends Quadrilatero{
	protected $lado2;

	public function __construct($l1,$l2){
		parent::__construct($l1);
		$this->lado2 = $l2;
	}
	
	public function calcArea(){
		return $this->lado * $this->lado2;
	}
	public function calcPerim(){
		return 2*$this->lado + 2*$this->lado2;
	}
}

$g = new Quadrado(15);
echo $g->calcArea();
echo $g->calcPerim();

echo "<br>";

$c = new Retangulo(15,10);
echo $c->calcArea();
echo $c->calcPerim();


?>