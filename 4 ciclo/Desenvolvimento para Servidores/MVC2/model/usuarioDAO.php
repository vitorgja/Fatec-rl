<?php
	require_once 'DAO.php';
	require_once 'usuario.php';
	class UsuarioDAO extends DAO {

		public function __construct(){
			parent::__construct();
		}
		
		// INSERIR **********************************************************************************
		public function insert(Usuario $u){
			if($this->getUsuario($u->getLogin(),$u->getSenha()) == 0){
				$i = $u->getId();
				$n = $u->getNome();
				$l = $u->getLogin();
				$s = $u->getSenha();
				$e = $u->getEmail();

				if($stmt = $this->connection->prepare("Insert into `TB_Usuario` (`id_usuario`, `nm_usuario`, `ds_login`, `ds_senha`, `ds_email`) VALUES (?,?,?,?,?)")){
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
		// FIM INSERIR *****************************************************************************
		

		// REMOVER ******************************************************************************
		public function delete($id){
			if ($id != null && $id != ""){

				$stmt = $this->connection->prepare("DELETE FROM `TB_Usuario` WHERE `id_usuario`=?");
				//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
				$stmt->bind_param( "i", $id);
				$stmt->execute();
				$stmt->close();
			}
		}
		// FIM REMOVER***************************************************************************
		
		// UPDATE *****************************************************************************
		public function update($u){
			$stmt = $this->connection->prepare("UPDATE `TB_Usuario` SET `nm_usuario`=?, `ds_email`=?, `ds_login`=?, `ds_senha`=? WHERE `id_usuario` =?");
			$nome = $u->getNome();
			$email = $u->getEmail();
			$login = $u->getLogin();
			$senha = $u->getSenha();
			$id   = $u->getId();
			//  "sss" retpresenta 3 strings, se fosse  2 string e um interio  seria "ssd"
			$stmt->bind_param( "ssssi",$nome,$email,$login,$senha,$id );
			$stmt->execute();
			$stmt->close();
		}
		// FIM UPDATE *************************************************************************

		// SELECT ***********************************************************************************
		public function listar(){
			$result = $this->connection->query("Select * FROM TB_Usuario");
			$aux = array();

			while($linha = $result->fetch_assoc()){
				$aux[] = new Usuario($linha['id_usuario'],$linha['nm_usuario'],$linha['ds_login'],$linha['ds_senha'],$linha['ds_email']);
				//$aux[] = $usu;
			}
			return $aux;
		}

		
		public function getUsuario($login,$senha){
			//$res = $this->connection->prepare("Select * from Usuario Where nm_login=? AND nm_senha=?");
			$res = $this->connection->prepare("Select * from TB_Usuario Where ds_login=? AND ds_senha=?");

			$res->bind_param("ss",$login,$senha);
			$res->execute();

			$res->bind_result($cid,$cnome,$clogin,$csenha,$cemail);
			$res->fetch();
			$res->num_rows();

			if(isset($clogin)){
				return new Usuario($cid,$cnome,$clogin,$csenha,$cemail);
			}else{
				return 0;
			}
		}
		public function getUsuarioById($id){
			$res = $this->connection->prepare("Select * from TB_Usuario Where id_usuario=?");
			$res->bind_param("s",$id);
			$res->execute();

			$res->bind_result($cid,$cnome,$clogin,$csenha,$cemail);
			$res->fetch();
			$res->num_rows();

			if(isset($clogin)){
				return new Usuario($cid,$cnome,$clogin,$csenha,$cemail);
			}else{
				return 0;
			}
		}
		// FIM SELECT *******************************************************************************************
	}

?>