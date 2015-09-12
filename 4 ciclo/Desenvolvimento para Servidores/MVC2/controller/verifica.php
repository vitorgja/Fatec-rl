<?php
	// () ! $ _
	class Verifica extends Controller{
		public function __construct(){
			parent::__construct();
			if($_SESSION["logado"]  != 1){
				//header("Location ".base_url('home/index/'));
				redirect('home/index/');
			}
			//redirect('home/index/');
		}
	}
?>