<?

class Home {

//aula 07/05

	public function cadastro(){
		require_once "view/cadastro.html";
	}

	public function cad(){
		require_once "model/usuarioDAO.php";
		$n = $_POST["no"];
		$l = $_POST["lo"];
		$s = $_POST["se"];
		$usu = new Usuario(0,$l,$s);
		$dao = new UsuarioDAO();
		$dao->insert($usu);
		echo"<h1>Sucesso!</h1>";
	}

        public function getu() {
                require_once "model/usuarioDAO.php";
                $dao = new UsuarioDAO();
                $dao->getUsuario("root", "root");
        }

	public function listar(){
                require_once "model/usuarioDAO.php";
		$dao = new UsuarioDAO();
		$vetor = $dao->listar();
                require_once "view/view.php";
                $view = new View();
                $view->listarUsuarios($vetor);
	}

        public function menu(){
                require_once "view/view.php";
                $vetor = array("cadastro", "login", "listar");
                $view = new View();
                $view->menu($vetor);
	}



// aula 30/04

	public function primeiro() {
		echo "olá mundo";
	}	

	public function __call($mn, $parm) { // magic method
		echo "Error 404 <br>";	
	}

	public function teste() {
		echo "in home::teste<br>";
	}

	public function login() {
		$_SESSION["logado"]=0; // sem login, se houver login: desloga
		require_once "view/login.html"; // chama a view
	}

	public function auth() {
		$l=$_POST["lo"];
		$s=$_POST["se"];
		if($l=='root' && $s='root') {
			$_SESSION["logado"]=1;
			$this->admin();
		} else {
			echo "FAIL";
		}
	}

	public function admin() {
		if($_SESSION["logado"]==1) {
			echo "Bem Vindo Admin<br>";
		} else {
			$this->login();
		}
	}

	public function show() {
		if($_SESSION["logado"]==1) {
			echo "in home::show<br>";
		} else {
			$this->login();
		}

	}

}

?>