<?php
	class Fale_Conosco {
		private $id,$nome,$telefone,$cidade,$email,$assunto,$mensagem,$data;
		public function __construct($id,$nome,$telefone,$cidade,$email,$assunto,$mensagem,$data){
			$this->id = $id;
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->cidade = $cidade;
			$this->email = $email;
			$this->assunto = $assunto;
			$this->mensagem = $mensagem;
			$this->data = $data;
		}
		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getAssunto(){
			return $this->assunto;
		}
		public function getMensagem(){
			return $this->mensagem;
		}
		public function getData(){
			return $this->data;
		}
	}
?>