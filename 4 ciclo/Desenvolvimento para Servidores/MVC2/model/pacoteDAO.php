<?
	require_once 'DAO.php';
	require_once 'pacote.php';
	class PacoteDAO extends DAO {
		public function __construct(){
			parent::__construct();
		}
		// INSERIR UM NOVO PACOTE
		public function insert(Pacote $p){
			if($this->getPacoteByName($p->getNome()) == 0){

				$stmt = $this->connection->prepare("INSERT INTO TB_Pacote (nm_pacote,ds_descricao,ds_pagamento,ds_imagem,dt_validade) VALUES (?,?,?,?,?)");
				$nome = $p->getNome();
				$desc = $p->getDescricao();
				$paga =	$p->getPagamento();
				$imag = $p->getImage();
				$vali = $p->getValidade();

				//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
				$stmt->bind_param( "sssss", $nome,$desc,$paga,$imag,$vali );
				$stmt->execute();
				$stmt->close();
			}else{
				echo "Pacote Já Cadastrado";
			}
		}
		// ATUALIZAR PACOTE
		public function update(Pacote $p){

				$stmt = $this->connection->prepare("UPDATE `TB_Pacote` SET `nm_pacote`=?, `ds_descricao`=?, `ds_pagamento`=?, `ds_imagem`=?, `dt_validade`=? WHERE `id_pacote` =?");
				$nome = $p->getNome();
				$desc = $p->getDescricao();
				$paga =	$p->getPagamento();
				$imag = $p->getImage();
				$vali = $p->getValidade();
				$id   = $p->getId();
				//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
				$stmt->bind_param( "sssssi",$nome,$desc,$paga,$imag,$vali,$id );

				$stmt->execute();
				$stmt->close();
		}
		// LISTAR TODOS OS PACOTES
		public function listar(){
			$result = $this->connection->query("Select * FROM TB_Pacote");
			$aux = array();

			while($linha = $result->fetch_assoc()){
				//`ds_pagamento``id_pacote``nm_pacote``ds_descricao``ds_imagem`
				$aux[] = new Pacote($linha['id_pacote'],  $linha['nm_pacote'], $linha['ds_descricao'], $linha['ds_pagamento'], $linha['ds_imagem'],$linha['ds_validade']);
			}
			return $aux;
		}
		// LISTAR 1 PACOTE PELO ID
		public function getPacoteById($id){
			$res = $this->connection->prepare("Select * from TB_Pacote Where id_pacote=?");
			$res->bind_param("s",$id);
			$res->execute();

			$res->bind_result($cid,$cnome,$cdescricao,$cpagamento,$cimagem,$cvalidade);
			$res->fetch();
			$res->num_rows();

			if(isset($cnome)){
				return new Pacote($cid,$cnome,$cdescricao,$cpagamento,$cimagem,$cvalidade);
			}else{
				return 0;
			}
		}
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
		public function delete($id){
			if ($id != null && $id != ""){

				$stmt = $this->connection->prepare("DELETE FROM `TB_Pacote` WHERE `id_pacote`=?");
				//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
				$stmt->bind_param( "i", $id);
				$stmt->execute();
				$stmt->close();
			}
		}
	}

?>