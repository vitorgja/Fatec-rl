<?php
// Classe Candidato
class Candidato{
	// atributos do candidato
	private $nome,$sexo,$salario,$idade,$profissao;

	// funcao do PHP que passa o valor de cada atributo
	public function __construct($nome,$sexo,$salario,$idade,$profissao){
		$this->nome = $nome;
		$this->sexo = $sexo;
		$this->salario = $salario;
		$this->idade = $idade;
		$this->profissao = $profissao;
	}

	// metodo mostrar do candidato, mostra na tela o nome e a profissão
	public function mostrar(){
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
		echo "
		<p>Nome do candidato: $this->nome</p>
		<p>Profissão: ".$f()."</p>
		";
	}
}
// fim Classe Candidato
?>