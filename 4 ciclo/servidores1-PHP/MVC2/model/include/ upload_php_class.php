<?php
/**
 * Tratamento de uploads
 * $arquivo = new verificaUp($_FILES['arquivo']);
 * $arquivo->fazerUpload();
 * 
 * @author Marlon U. Marcello <marlon.marcello@gmail.com>
 * @version 1.0
 * @uses MAX_UPLOAD
 */
class verificaUp{

	protected $arquivo;		
	protected $extensao;
	protected $nome;
	public $extPermitidas = array("png", "jpeg", "jpg", "gif");
	public $caminho = 'enviados/';
	public $tamanhoMax = MAX_UPLOAD;		

	/**
	 * 
	 * Inicia a classe
	 *
	 * @param array $arquivo Variável de arquivo do php $_FILES[]
	 */
	function __construct($arquivo){			
		if(!isset($arquivo)){				
			throw new Exception('O arquivo não foi indicado');				
		}else{
			$this->arquivo = $arquivo;
			// Extensão
			$this->extensao = substr($arquivo['name'], strrpos($arquivo['name'], '.') + 1);
			// Nome
			$this->nome = explode(".", $arquivo['name']);
			// Renomeia
			$this->nome = $this->nome[0] . '_' . time() . '.' . $this->extensao;
		}
	}

	/**
	 * 
	 * Verifica se a extensão é compatível
	 *
	 * @return boolean
	 */
	public function verificarExtensao(){						
		$permitido = false;
		for($i = 0; $i < sizeof($this->extPermitidas); $i++){
			if(strcasecmp($this->extPermitidas[$i], $this->extensao) == 0){
				$permitido = true;
		  	}
		}

		return $permitido;
	}

	/**
	 * 
	 * Verifica se o tamanho do arquivo não ultrapassa o limite
	 *
	 * @return boolean Se o arquivo for maior retorna false.
	 */
	public function verificarTamanho(){
		if ($this->arquivo['size'] > $this->tamanhoMax)
			return false;
		else
			return true;
	}

	/**
	 * 
	 * Salva um novo nome para o arquivo
	 *
	 * @param string Novo nome.
	 */
	public function renomear($novoNome){
		if(isset($novoNome) && is_string($novoNome))
			$this->nome = $novoNome . '_' . time() . '.' . $this->extensao;
		else
			throw new Exception("Novo Nome não indicado", 1);
		
	}

	/**
	 * 
	 * Retorna o nome do arquivo
	 *
	 * @return string
	 */
	public function getNome(){			
		return $this->nome;

	}

	/**
	 * 
	 * Armazena as extensões permitidas
	 *
	 * @param array
	 */
	public function setExtensoes($extensoes){
		if(count($extensoes) > 0)
			$this->extPermitidas = $extensoes;
		else
			throw new Exception("Extensões não definidas");
	}

	/**
	 * 
	 * Armazena o caminho que irá salvar o upload
	 *
	 * @param string
	 */
	public function setCaminho($caminho){
		if(strlen($caminho) > 0)
			$this->caminho = $caminho;
		else
			throw new Exception("Caminho não definido");
	}


	/**
	 * 
	 * Realiza o upload
	 *
	 * @return boolean
	 */
	public function fazerUpload(){
		if($this->verificarExtensao()){
			if($this->verificarTamanho()){
				
				if(is_uploaded_file($this->arquivo['tmp_name'])){
					if(copy($this->arquivo['tmp_name'], $this->caminho . $this->nome )){
						return true;
				  	}else
				  		throw new Exception("Não foi possível copiar o arquivo");
				}else
					throw new Exception("Arquivo não encontrado");
			}else
				throw new Exception("Tamanho do upload excedeu o tamanho permitido de $tamanhoMax kb");
		}else
			throw new Exception('Extensão não permitida');
	}
}
?>
