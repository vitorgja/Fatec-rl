<?
	class Pacote {
		private $id,$image,$nome,$descricao,$pagamento,$validade;
		public function __construct($id=0,$nome,$descricao,$pagamento,$image,$validade){
			$this->id = $id;
			$this->image = $image;
			$this->nome = $nome;
			$this->descricao = $descricao;
			$this->pagamento = $pagamento;
			$this->validade = $validade;
		}
		public function getId(){
			return $this->id;
		}
		public function getImage(){
			return $this->image;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getPagamento(){
			return $this->pagamento;
		}
		public function getValidade(){
			return $this->validade;
		}
	}
?>