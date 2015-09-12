<?
	require_once 'DAO.php';
	require_once 'faleconosco.php';
	class FaleconoscoDAO extends DAO {
		public function __construct(){
			parent::__construct();
		}
		// INSERIR UM NOVO PACOTE
		public function insert(Fale_Conosco $p){
			if($p){

				$stmt = $this->connection->prepare("INSERT INTO `TB_Fale_Conosco`(`nm_fale_conosco`, `ds_telefone`, `ds_cidade`, `ds_email`, `ds_assunto`, `ds_mensagem`, `dt_fale`) VALUES (?,?,?,?,?,?,?)");

				$id = $p->getId();
				$nome = $p->getNome();
				$tele = $p->getTelefone();
				$cida = $p->getCidade();
				$emai = $p->getEmail();
				$assu = $p->getAssunto();
				$mens = $p->getMensagem();
				$data = $p->getData();


				//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
				$stmt->bind_param( "sssssss", $nome,$tele,$cida,$emai,$assu,$mens,$data );
				$stmt->execute();
				$stmt->close();
			}else{
				echo "Pacote Já Cadastrado";
			}
		}
		// LISTAR TODOS OS PACOTES
		public function listar(){
			$result = $this->connection->query("SELECT  `TB_Fale_Conosco` .* FROM `TB_Fale_Conosco`");
			$aux = array();

			while($linha = $result->fetch_assoc()){
				// 
				$aux[] = new Fale_Conosco( $linha['id_fale_conosco'], $linha['nm_fale_conosco'], $linha['ds_telefone'], $linha['ds_cidade'], $linha['ds_email'], $linha['ds_assunto'], $linha['ds_mensagem'], $linha['dt_fale']);
			}
			return $aux;
		}

		public function delete($id){
			if ($id != null && $id != ""){
				echo $id;
				$stmt = $this->connection->prepare("DELETE FROM `TB_Fale_Conosco` WHERE `id_fale_conosco`=?");
				//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
				$stmt->bind_param( "i", $id);
				$stmt->execute();
				$stmt->close();
			}
		}
	}

?>