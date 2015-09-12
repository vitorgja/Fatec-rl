<?
	class Usuario{
		private $id, $login, $senha;

		public function __construct($id=0, $login, $senha){
			$this->login = $login;
			$this->senha = $senha;
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function getLogin(){
			return $this->login;
		}

		public function getSenha(){
			return $this->senha;
		}
	}

?>