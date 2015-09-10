<?php

		// base_url retorna a url padrao do site {url da configuracao do site} se nao passado nenhum parametro, se for passado o parametro que deve conter o caminho apos a url padrao
		 function base_url($param=''){
			include "config/configuracao.php";
			if ($param == ''){ 
				return $config["base_url"];
			}else{
				return ($config["base_url"].$param);
			}
		}




		// redirect para a url padrao se nao for passado nenhum parametro, se houver um parametro ele  redireciona para a url padrao mais a continuacao do parametro
		function redirect($param=''){
			if ($param == ''){
				header("Location: ".base_url());
			}else{
				header("Location: ".base_url($param));
			}
		}
?>

