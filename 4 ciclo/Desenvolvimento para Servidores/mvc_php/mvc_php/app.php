<?

class App {

	public function __construct() {
	
		require_once "controller/home.php"; // home.php é o controlller
		$m=$_GET['m']; // pega o método da url ex: site.com/app.php?m=login -> site.com/login
		$ctr=new Home(); // instanciando o controller
		$ctr->$m(); // chama o método que tiver contido em $m. Uma técnica parecida no java chama-se reflection, no php essa técnica chama-se variável variavel
	
	}

}

session_start(); // inicia uma session (é o cookie do servidor - uma informação que fica armazenada no servidor)
$app=new App(); // instancia o objeto da classe App e inicia o fluxo do mvc

?>