<?
	abstract class DAO {
		protected $connection; // variavel que vai conversar com o banco de dados

		public function __construct(){
			$this->connection = new mysqli('mysql.hostinger.com.br', 'u606560807_inter', '97110347', 'u606560807_inter');
		}
		//abstract public function insert(Usuario $a);
		abstract public function listar();
	}
?>