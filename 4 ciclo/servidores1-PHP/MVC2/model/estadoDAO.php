<?
	require_once 'DAO.php';
	require_once 'estado.php';
	class EstadoDAO extends DAO {
		public function __construct(){
			parent::__construct();
		}

		// LISTAR TODOS OS Estados
		public function listar(){
			$result = $this->connection->query("Select * FROM TB_Estado");
			$aux = array();

			while($linha = $result->fetch_assoc()){
				//`ds_pagamento``id_pacote``nm_pacote``ds_descricao``ds_imagem`
				$aux[] = new Estado($linha['id_estado'],  $linha['nm_estado'], $linha['TB_Pais_id_pais']);
			}
			return $aux;
		}
		/*
		public function getPacoteByName($name){
			$res = $this->connection->prepare("Select * from TB_Pacote Where nm_pacote=?");
			$res->bind_param("s",$name);
			$res->execute();
			$res->bind_result($cid,$cnome,$cdescricao,$cpagamento,$cimagem,$cvalidade);
			$res->fetch();
			$res->num_rows();
			 printf("Errormessage: %s\n", $res->error);
			if(isset($cnome)){
				return new Pacote($cid,$cnome,$cdescricao,$cpagamento,$cimagem,$cvalidade);
			}else{
				return 0;
			}
		}
		*/

	}

?>