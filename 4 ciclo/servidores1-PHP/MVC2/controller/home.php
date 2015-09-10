<?php

	class Home extends Controller{


		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->views->render("home_index");
		}
		public function empresa(){
			$this->views->render("home_empresa");
		}
		public function passagens(){
			require_once "model/estadoDAO.php";
			$eDAO = new EstadoDAO();
			$estados = $eDAO->listar();
			$this->views->assign("estados",$estados);
			$this->views->render("home_passagens","home");
		}
		public function pacotes(){
			require_once "model/pacoteDAO.php";
			$pDAO = new PacoteDAO();
			$pacotes = $pDAO->listar();
			$this->views->assign("pacotes",$pacotes);
			$this->views->render("home_pacotes2");
		}
		public function fale(){
			$this->views->render("home_fale");
		}

		public function getu(){
			require_once 'model/usuarioDAO.php';
			$dao = new UsuarioDAO();
			echo $dao->getUsuario("vitor","vitor");
		}


		public function login(){
			$_SESSION["logado"]=0;//nao ta logado, se houver LOGIN : desloga

			$this->views->render("home_formulario");
			//require_once 'view/v_form.php';
		}

		public function auth(){
			$l = $_POST['lo'];
			$s = $_POST['se'];

			require_once "model/usuarioDAO.php";
			$uDAO = new UsuarioDAO();

			$usu = $uDAO->getUsuario($l,$s);
			if($usu == 0) {
				echo "fail!";
				$this->login();
			}else{	
				$_SESSION["logado"] =1;
				$_SESSION["cd"] = $usu->getId();
				//$this->admin($usu);
				redirect("painel/");
			}
		}

		// cadastrar novo envio de formulario de cadastro
		public function submitfale(){
			$nm = isset($_POST['nome'])?$_POST['nome']:null;
			$cdd = isset($_POST['cidade'])?$_POST['cidade']:null;
			$tel = isset($_POST['telefone'])?$_POST['telefone']:null;
			$em = isset($_POST['email'])?$_POST['email']:null;
			$ast = isset($_POST['assunto'])?$_POST['assunto']:null;
			$msg = isset($_POST['mensagem'])?$_POST['mensagem']:null;

			if($nm!=null && $msg!=null && ( $em!=null || $tel!=null )){
				//2015-06-30 05:10:15
				require_once "model/faleconoscoDAO.php";
				$data = date("Y-m-d H:i:s");
				$fc = new Fale_Conosco("",$nm,$tel,$cdd,$em,$ast,$msg,$data);
				$fcDAO = new FaleconoscoDAO();
				$fcDAO->insert($fc);
				$this->views->render("home_submitfale");
			}
			redirect("home/fale");
		}

		public function search(){
			$opcIdaVolta = isset($_POST['opcIdaVolta'])?$_POST['opcIdaVolta']:null;
			$origem = isset($_POST['origem'])?$_POST['origem']:null;
			$destino = isset($_POST['destino'])?$_POST['destino']:null;
			$dataIda = isset($_POST['dataIda'])?$_POST['dataIda']:null;
			$dataVolta = isset($_POST['dataVolta'])?$_POST['dataVolta']:null;

			require_once "model/vooDAO.php";
			require_once "library/data.php";
			
			require_once "model/estadoDAO.php";
			$eDAO = new EstadoDAO();
			$estados = $eDAO->listar();
			$this->views->assign("estados",$estados);

			$dataIda = Data::data_USA_BR($dataIda); // Converte a data para o padrao americano (banco de dados)
			$dataVolta = Data::data_USA_BR($dataVolta); // Converte a data para o padrao americano (banco de dados)
			if($opcIdaVolta=="ida-volta" || $opcIdaVolta=="" || $opcIdaVolta==null){
				$vDAO = new VooDAO();
				$ida = $vDAO->getVooODD($origem,$destino,$dataIda);
				$volta = $vDAO->getVooODD($origem,$destino,$dataVolta);
				

				$aux = array();
				$aux['ida'] = $ida;
				$aux['volta'] = $volta;
				$this->views->assign("resultado",$aux);

				$this->views->render("home_header","home",true);
				$this->views->render("home_passagens","home",true);
				$this->views->render("home_resultado","home",true);
				$this->views->render("home_footer","home",true);
			}else{
				$aux = array();
				$aux['ida'] = $ida;
				$this->views->assign("resultado",$aux);

				$this->views->render("home_header","home",true);
				$this->views->render("home_passagens","home",true);
				$this->views->render("home_resultado","home",true);
				$this->views->render("home_footer","home",true);
			}

		}


	/*	APARTIR DESTA COMEÇA Os EXERCICIOS DAS AULAS

		public function admin(Usuario $usuario){

			if($_SESSION["logado"] == 1){
				//$this->views->logado($usuario);
				$this->views->assign("","");
				$this->views->render("painel_index");
			}else{
				$this->login();
			}
		}


		public function cadastro(){
			//require_once "model/usuario.php";
			//require_once "view/v_cadastro.php";
			$this->views->render("cadastro");
		}

		public function cad(){
			require_once "model/usuarioDAO.php";
			$n = $_POST['no'];
			$l = $_POST['lo'];
			$s = $_POST['se'];

			$usu = new Usuario(0,$n,$l,$s);
			$uDAO = new UsuarioDAO();
			$uDAO->insert($usu);
			
			$this->views->sucesso();


		}
		
		public function listar(){
			require_once "model/usuarioDAO.php";
			$uDAO = new UsuarioDAO();
			$aux = $uDAO->lista();
			foreach($aux as $key => $value){
				echo $key."-".$value."<br>";
				$this->views->assign($key,$value);
			}
			$this->views->render('listar');
		}
		
		*/

	}

?>