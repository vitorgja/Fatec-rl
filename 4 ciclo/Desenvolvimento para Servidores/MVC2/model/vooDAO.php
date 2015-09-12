<?
	require_once 'DAO.php';
	require_once 'voo.php';
	require_once 'estado.php';

	require_once 'library/data.php';
	class VooDAO extends DAO {
		public function __construct(){
			parent::__construct();
		}
		
		public function insert(Voo $v){
			$sqlInsert = "";

			if($this->getVoo($v->getIdOrigem(),$v->getIdDestino()) == 0){
				$id = $v->getId();
				$or = $v->getIdOrigem();
				$de = $v->getIdDestino();
				$da = $v->getData();
				$e = $v->getQtdAdulto();
				$e = $v->getQtdCrianca();

				if($stmt = $this->connection->prepare("INSERT INTO `TB_Voo`(`id_voo`, `TB_Estado_id_estado_origem_voo`, `TB_Estado_id_estado_destino_voo`, `dt_voo`, `qt_adulto`, `qt_crianca`) VALUES (?,?,?,?,?,?)")){
					//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
					$stmt->bind_param( "issss", $i,$n, $l, $s, $e );
					$stmt->execute();
					$stmt->close();

					redirect("/painel/usuarios");
				}else{
					echo "<hr>";
					die($this->connection->error);
					echo "<hr>";
				}

			}else{
				echo "Usuario Ja Cadastrado";
			}
		}

		// LISTAR TODOS OS PACOTES
		public function listar(){
			$result = $this->connection->query("Select * FROM TB_Voo");
			$aux = array();

			while($linha = $result->fetch_assoc()){
				$aux[] = new Voo($linha['id_voo'], $linha['TB_Estado_id_estado_origem_voo'], $linha['TB_Estado_id_estado_destino_voo'], $linha['dt_voo'], $linha['qt_adulto'], $linha['qt_crianca']);
			}
			return $aux;
		}

		public function getVooODD($origem,$destino,$data){
			//SELECT * FROM `TB_Voo` LEFT JOIN `TB_Estados` ON `TB_Voo`.`TB_Estado_id_estado_origem_voo`=`TB_Estados`.`id_estado`;
			$res = $this->connection->prepare("SELECT * FROM `TB_Voo` LEFT JOIN `TB_Estado` ON `TB_Voo`.`TB_Estado_id_estado_origem_voo`=`TB_Estado`.`id_estado` WHERE `TB_Estado_id_estado_origem_voo`=? and `TB_Estado_id_estado_destino_voo`=? and `dt_voo`=?");
			$res->bind_param("iis",$origem,$destino,$data);
			$res->execute();
			$res->bind_result($id,$id_origem,$id_destino,$data,$qtd_adulto,$qtd_crianca,$id_estado,$nm_estado,$id_pais);
			$res->fetch();
			$res->num_rows();
			 printf("Errormessage: %s\n", $res->error);
			if(isset($id)){

				$a['voo'] = new Voo($id,$id_origem,$id_destino,Data::data_USA_BR($data),$qtd_adulto,$qtd_crianca);
				$a['estado'] = new Estado($id_estado,$nm_estado,$id_pais);
				$aux[] = $a;
				return $aux;

			}else{
				return 0;
			}
		}

	}

?>