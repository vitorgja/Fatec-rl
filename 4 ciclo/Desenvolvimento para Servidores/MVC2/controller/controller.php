<?php
	class Controller{
		protected $views;
		public function __construct(){
			require_once "view/views.php"; // cgana a pagina referente a classe Views
			$this->views = new Views("higher");
		}

		// Magic Method
		public function __call($mn, $parm){
			//echo "Error 404 <br>";
			$this->views->render("404_error");
		}
	}


?>