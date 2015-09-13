<?
	class Voo {
		private $id,$id_origem,$id_destino,$data,$qtd_adulto,$qtd_crianca;
		public function __construct($id,$id_origem,$id_destino,$data,$qtd_adulto,$qtd_crianca){
			$this->id = $id;
			$this->id_origem = $id_origem;
			$this->id_destino = $id_destino;
			$this->data = $data;
			$this->qtd_adulto = $qtd_adulto;
			$this->qtd_crianca = $qtd_crianca;
		}
		public function getId(){
			return $this->id;
		}
		public function getIdOrigem(){
			return $this->id_origem;
		}
		public function getIdDestino(){
			return $this->id_destino;
		}
		public function getData(){
			return $this->data;
		}
		public function getQtdAdulto(){
			return $this->qtd_adulto;
		}
		public function getQtdCrianca(){
			return $this->qtd_crianca;
		}
	}
?>