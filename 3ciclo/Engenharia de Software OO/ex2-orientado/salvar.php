<?php

class Salvar{
	
	private $nome,$sexo,$salario,$idade,$profissao;

	public function __construct($nome,$sexo,$salario,$idade,$profissao){
		$this->nome = $nome;
		$this->sexo = $sexo;
		$this->salario = $salario;
		$this->idade = $idade;
		$this->profissao = $profissao;
	}

	public function mostrar(){
		$data['nome'] = $this->nome;
		$data['sexo'] = $this->sexo;
		$data['salario'] = $this->salario;
		$data['idade'] = $this->idade;
		$f = function(){
			switch($this->profissao){
			case 1:
				return "Cartógrafo";
				break;
			case 2:
				return "Assistente Social";
				break;
			case 3:
				return "Psicólogo";
				break;
			case 4:
				return "Atendente";
				break;
			case 5:
				return "Secretária Bilíngue";
				break;
			case 6:
				return "Geólogo";
				break;
			case 1:
				return "Cartógrafo";
				break;
			default:
				return "";
			}
		};
		$data['profissao'] = $f();
		require_once "view/mostrar.php";
	}
}
?>