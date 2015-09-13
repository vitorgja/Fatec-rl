<?php
	require_once "controller/verifica.php";
	class Painel extends Verifica{
		protected $uDAO,$pDAO,$fcDAO;
		public function __construct(){
			parent::__construct();
			require_once "model/pacoteDAO.php";
			require_once "model/usuarioDAO.php";
			require_once "model/faleconoscoDAO.php";
			require_once "model/estadoDAO.php";
			require_once "model/vooDAO.php";

			// DAO
			$this->pDAO = new PacoteDAO();
			$this->uDAO = new UsuarioDAO();
			$this->fcDAO = new FaleconoscoDAO();

			// id do usuario no DB
			$_SESSION["cd"];
			$usu = $this->uDAO->getUsuarioById($_SESSION["cd"]);

			$this->views->assign("login",$usu->getNome());
		}
		public function index(){
			$this->views->render("painel_index","painel");
		}
		// USUARIO -------------------------------------------------------------------------------------
		public function usuarios(){
			require_once "model/usuarioDAO.php";

			$usuarios = $this->uDAO->listar();

			$this->views->assign("usuarios",$usuarios);
			$this->views->render("painel_usuarios","painel");
		}
		public function addusuario(){
			$id = isset($_POST['id'])?$_POST['id']: null;
			$nm = isset($_POST['nome'])?$_POST['nome']: null;
			$em = isset($_POST['email'])?$_POST['email']: null;
			$lg = isset($_POST['login'])?$_POST['login']: null;
			$sh = isset($_POST['senha'])?$_POST['senha']: null;

			if($nm!=null && $lg!=null && $sh!=null && $em!=null){
				$u = new Usuario($id, $nm, $lg, $sh, $em);
				$this->uDAO->insert($u);
				redirect("painel/usuarios");
			}else{
				redirect("painel/usuarios");
			}
		}
		public function delusuario(){
			$id = isset($_POST['id'])?$_POST['id']: null;
			if($id!=null && $id!=""){
				$this->uDAO->delete($id);
				redirect("/painel/usuarios");
			}else{
				redirect("/painel/usuarios");
			}
		}
		public function getusuario(){
			$id = $_POST["idEditarU"];
			$p = $this->uDAO->getUsuarioById($id);
			if($p!=0){
				$return .= $p->getNome()."//";
				$return .= $p->getEmail()."//";
				$return .= $p->getLogin()."//";
				$return .= $p->getSenha()."//";

				echo $return;
			//return "image.img,vitor pereira,descricao,pagamento,validade,";
			}else{
				echo $id;
				//echo "nao tem retorno,asdasdasd";
			}
		}
		public function updateusuario(){
			$id = isset($_POST['id'])?$_POST['id']: null;
			$nm = isset($_POST['nome'])?$_POST['nome']: null;
			$em = isset($_POST['email'])?$_POST['email']: null;
			$lg = isset($_POST['login'])?$_POST['login']: null;
			$sh = isset($_POST['senha'])?$_POST['senha']: null;
			$u = new Usuario($id,$nm,$lg,$sh,$em);
			$this->uDAO->update($u);
			redirect("painel/usuarios");

		}
		// FIM USUARIO ---------------------------------------------------------------------------------
		
		// PASSAGENS
		public function passagens(){
			$this->pDAO = null;

			$eDAO = new EstadoDAO();
			$estados = $eDAO->listar();

			$eDAO = null;
			$vDAO = new VooDAO();
			$voos = $vDAO->listar();
			$this->views->assign("estados",$estados);
			$this->views->assign("voos",$voos);
			$this->views->render("painel_passagens","painel");
		}
		public function addpassagens(){
			$origem =  isset($_POST['origem'])? $_POST['origem'] : "";
			$destino = isset($_POST['destino'])? $_POST['destino'] : "";
			$data =     isset($_POST['data'])? $_POST['data'] : "";
			$adulto =   isset($_POST['qtd-adulto'])? $_POST['qtd-adulto'] : 0;
			$crianca =   isset($_POST['qtd-crianca'])? $_POST['qtd-crianca'] : 0;

			if($origem != null && $destino != null && $data != null  && $adulto != null  && $crianca != null){

			}


		}
		// FIM PASSAGENS

		// PACOTES *******************************************************************
		public function pacotes(){
			$pacotes = $this->pDAO->listar();

			$this->views->assign("pacotes",$pacotes);
			$this->views->render("painel_pacotes","painel");
		}
		public function getpacotes(){
			$id = isset($_POST["idEditar"])?$_POST["idEditar"]:1;
			$p = $this->pDAO->getPacoteById($id);
			if($p!=0){
				$return = $p->getImage()."//";
				$return .= $p->getNome()."//";
				$return .= $p->getDescricao()."//";
				$return .= $p->getPagamento()."//";
				$return .= $p->getValidade()."//";

				echo $return;
			//return "image.img,vitor pereira,descricao,pagamento,validade,";
			}else{
				echo "nao tem retorno,asdasdasd";
			}
			echo "asdasd";
		}
		public function updatepacotes(){
			require_once "model/upload_php_class.php";
			$id = isset($_POST['id'])?$_POST['id']: null;
			$nm = isset($_POST['nome'])?$_POST['nome']: null;
			$ds = isset($_POST['descricao'])?$_POST['descricao']: null;
			$pg = isset($_POST['pagamento'])?$_POST['pagamento']: null;
			$vl = isset($_POST['validade'])?$_POST['validade']: null;
			$img = isset($_FILES['image'])?$_FILES['image']: null;
			if($img!=null){
				$caminhoV = "view/upload/image/pacotes/";
				$caminhoS = "upload/image/pacotes/";
				$up = new verificaUp($img);
				$up->renomear("vitor.jpg");
				$nomeImg = $up->getNome();
				$up->setCaminho($caminhoV);
				$up->fazerUpload();
				$p = new Pacote($id,$nm,$ds,$pg,$caminhoS."".$nomeImg,$vl);
				$this->pDAO->update($p);
			}else{
				$p = new Pacote($id,$nm,$ds,$pg,$img,$vl);
				$this->pDAO->update($p);
			}
			redirect("painel/pacotes");
		}

		public function addpacote(){
			require_once "model/upload_php_class.php";

			$c = base_url("view/upload/image/pacotes/");

			$id = isset($_POST['id'])?$_POST['id']: null;
			$nm = isset($_POST['nome'])?$_POST['nome']: null;
			$ds = isset($_POST['descricao'])?$_POST['descricao']: null;
			$pg = isset($_POST['pagamento'])?$_POST['pagamento']: null;
			$vl = isset($_POST['validade'])?$_POST['validade']: null;
			$img = isset($_FILES['image'])?$_FILES['image']: "NULLLL";
			$caminhoV = "view/upload/image/pacotes/";
			$caminhoS = "upload/image/pacotes/";
			$up = new verificaUp($img);
			$up->renomear("vitor.jpg");
			$nomeImg = $up->getNome();
			$up->setCaminho($caminhoV);
			$up->fazerUpload();

			$p = new Pacote($id,$nm,$ds,$pg,$caminhoS."".$nomeImg,$vl);
			$this->pDAO->insert($p);


			redirect("painel/pacotes");

		}
		public function delpacote(){
			$id = isset($_POST['id'])?$_POST['id']: 12;
			if($id!=null && $id!=""){
				$this->pDAO->delete($id);
				redirect("/painel/usuarios");
			}else{
				redirect("/painel/usuarios");
			}
		}
		// FIM PACOTES *****************************************************************

		// FALE CONOSCO ****************************************************************
		public function fale(){

			$contatos = $this->fcDAO->listar();

			$this->views->assign("contatos",$contatos);
			$this->views->render("painel_fale","painel");
		}
		public function delfale(){
			$id = isset($_POST['id'])?$_POST['id']:6;
			if($id!=null){
				$this->fcDAO->delete($id);
				redirect("painel/fale");
			}else{
				redirect("painel/fale");
			}
		}
		// FIM FALE CONOSCO ************************************************************

		public function logout(){
			$_SESSION['logado'] = 0;
			$_SESSION['cd'] = null;
			redirect("home/");
		}
	}
?>