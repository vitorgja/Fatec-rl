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
		$candidato['nome'] = $this->nome;
		$candidato['sexo'] = $this->sexo;
		$candidato['salario'] = $this->salario;
		$candidato['idade'] = $this->idade;
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
			default:
				return "";
			}
		};
		$candidato['profissao'] = $f();
		require_once "view/mostrar.php";
	}
}
?>