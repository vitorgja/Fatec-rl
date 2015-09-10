<?

require_once "usuario.php";

class UsuarioDAO{
	private $conn; // conexão com bd

	public function __construct(){
		$this->conn = new mysqli ('mysql.hostinger.com.br', 'u897796242_root', 'root12', 'u897796242_fatec');
	}

	public function insert(Usuario $u){
                var_dump($this->conn);
		$stmt = $this->conn->prepare("INSERT INTO Usuario (nm_usuario, nm_senha) VALUES (?,?)");
		//$stmt->bind_param("ss", $u->getLogin(), $u->getSenha()); //tira as "" que tem no BD
		$stmt->execute();
		$stmt->close();
	}

	public function listar(){
		$resultado = $this->conn->query("Select * from Usuario"); //query - usa pro select 
		$aux = array();
		
		while ($linha = $resultado->fetch_assoc()){ //enqto tiver linhas - quando for nulo ele sai do while
			$usuario = new Usuario($linha['cd_usuario'], $linha['nm_usuario'], $linha['nm_senha']);
			$aux[] = $usuario; // guarda no array as informações do bd
		}
		return $aux;	
	}

	public function getUsuario($login, $senha){
		$res = $this->conn->prepare("Select * from Usuario WHERE nm_usuario=? AND nm_senha=?");
		$res->bin_param("ss", $login, $senha); // trocar 1º ? por $login e o 2º ? por $senha
		$res->execute();
		
		$res->bind_result($cid, $clogin, $csenha);
		$res->fetch(); // executar operação
		if (isset ($clogin)){ //isset () ver se existe no bd
			return new Usuario ($cid, $cnome,$clogin,$csenha);
		} else {
			return 0;
		}
	}
		
}

?>