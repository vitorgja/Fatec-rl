<?php

	class Usuario {
		private $id, $nome, $senha, $login, $email;

		public function __construct($id=0,$nome,$login,$senha,$email){
			$this->nome = $nome;
			$this->login = $login;
			$this->senha = $senha;
			$this->email = $email;
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getEmail(){
			return $this->email;
		}

	}

?>