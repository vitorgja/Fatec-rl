<?php
	class Home {

		// Magic Method
		public function __call($mn, $parm){
			echo "Error 404 <br>";
		}
		public function login(){
			$_SESSION["logado"]=0;//nao ta logado, se houver LOGIN : desloga
			require_once 'v_form.php';
		}
		
		public function auth(){
			$l = $_POST['lo'];
			$s = $_POST['se'];

			if($l == "root" && $s == "root"){
				$_SESSION["logado"] =1;
				$this->admin();
			}else{
				echo "fail!";
				$this->login();
			}
		}

		public function admin(){

			if($_SESSION["logado"] == 1){
				echo "BEM VINDO!";
			}else{
				$this->login();
			}
		}
		

	}

?>