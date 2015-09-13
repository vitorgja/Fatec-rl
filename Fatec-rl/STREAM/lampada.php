<?php 
/**
*	Acender ou Apagar a  lampada e obter a quantidade de acendimento
*	@author Vitor Pereira
*
*/
class Lampada {
	
	public $estado, $qtdAcendimento;

	public function __construct()
	{
		$this->estado = false;
		$this->qtdAcendimento = 0;
	}
	/**
	*	caso esteja acessa apaga a lampada, e se estiver apagada acende a lampada
	*	@return void
	*/
	public function click(){
		if( $this->checaEstado() == true ) // se a lampada estiver acessa, ela apaga a lampada
		{ 
			$this->estado = false;
		}
		else
		{
			$this->estado = true;
			$this->qtdAcendimento ++; // acrescenta 1 na variavel qtdAcendimento
			//$this->qtdAcendimento = $this->qtdAcendimento + 1;
		}
	}
	/**
	*	retorn a quantidade de acendimentos
	*	@return int
	*/
	public function qtdAcendimento(){
		return $this->qtdAcendimento;
	}

	/**
	*	retorna o estado da Lampada
	*	@return boolean
	*/
	public function checaEstado(){
		return $this->estado;
	}

}


// Instanci a de Objeto Lampada
$lampada = new Lampada();



// acender a lampda
$lampada->click();
// acender a lampda
$lampada->click();
// acender a lampda
$lampada->click();

// quantidade de acendimento
echo $lampada->qtdAcendimento();





?>