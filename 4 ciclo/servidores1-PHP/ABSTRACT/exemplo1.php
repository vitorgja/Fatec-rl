<?
abstract class Animal{
	// METODO CONCRETO
	public function domir(){
		echo "zzzzzzzzzz";
	}
	
	// METODO ABSTRATO
	public abstract function emitirSom();
}
class Cachorro extends Animal{
	/*
		Sou obrigado a sobreescrever o metodo 
		emitirSomm poes Animal e abstrato 
		e Cachorro e Concreto 
	*/	
	public function emitirSom(){
		echo "AU AU AU AU AUA UA Uau";
	}
}
class Gato extends Animal{
	/*
		Sou obrigado a sobreescrever o metodo 
		emitirSomm poes Animal e abstrato 
		e Gato e Concreto 
	*/	
	public function emitirSom(){
		echo "MIAU";
	}
}

$g = new Gato();
$g->dormir();
$g->emitirSom();

echo "<br>";

$c = new Cachorro();
$c->dormir();
$c->emitirSom();


?>