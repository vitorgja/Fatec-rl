$(main);
function main(){
	$(".Disabled").hide();
	$("#EDITARBG").hide();
	$("#EDITAR").hide();
	

	// PACOTES	****************************************************************************
	//EDITAR PACOTE
	$("button.EDITARp").click(function(){

		var id = parseInt( $(this).val());
		//$.post("demo_ajax_gethint.asp", {suggest: txt}, function(result){
		$.post("http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/painel/getpacotes",{idEditar : id}, function(data){
			//* deixa a div id resultado vazia * /
			var pacotes = data;
			var pacote = pacotes.split("//");

			var dados = [];
			dados["image"] = pacote[0];
			dados["nome"] = pacote[1];
			dados["descricao"] = pacote[2];
			dados["pagamento"] = pacote[3];
			dados["validade"] = pacote[4];

			//$("#image").val(dados["image"]);
			$("#nome").val(dados["nome"]);
			$("#descricao").val(dados["descricao"]);
			$("#pagamento").val(dados["pagamento"]);
			$("#validade").val(dados["validade"]);
			$("#Img").attr("src","http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/view/"+dados["image"]);
			$("#id").attr("value",id);

			//$('#resultado').html(data);
			//$('#resultado').append("</table>");

			$("form").attr("action","http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/painel/updatepacotes")
		});
		$("#EDITARBG").show();
		$("#EDITAR").show();


	});
	// ADD PACOTE
	$("#addPacote").click(function(){
		$("#EDITARBG").show();
		$("#EDITAR").show();
		var t = $("#EDITAR > .panel-heading").html();
		t = t.split(" ");
		$("#EDITAR > .panel-heading").html("Adcionar "+t[1]);
		$("form").attr("action","http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/painel/addpacote");
	});
	// DELETAR Pacote
	$(".DELETEp").click(function(){
		var r = confirm("Deseja deletar o Pacote?");
		if (r == true) {
			var id = $(this).val();
			$.post(base_url("painel/delpacote"),{id : id}, function(){});
			for (i=0;i<100;i++){
				a="sleep";
			}
			//alert("Deletado Com sucesso!");
			redirect("painel/pacotes");
		}
	});
	// FIM PACOTE ****************************************************************************


	// MASCARA DE FUNDO ****************************************************************************
	$("#EDITARBG").click(function(){
		$("#EDITARBG").hide();
		$("#EDITAR").hide();

	});
	$("button.close").click(function(){
		$("#EDITARBG").hide();
		$("#EDITAR").hide();

	});
	// FIM MASCARA DE FUNDO *************************************************************************



	// USUARIO *******************************************************************************
	// ADD USURIO
	$("#addUsuario").click(function(){
		$("#EDITARBG").show();
		$("#EDITAR").show();
		var t = $("#EDITAR > .panel-heading").html();
		t = t.split(" ");
		$("#EDITAR > .panel-heading").html("Adcionar "+t[1]);
		$("form").attr("action","http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/painel/addusuario");
	});


	// DELETAR USUARIO
	$(".DELETEu").click(function(){
		var r = confirm("Deseja deletar o Usuario?");
		if (r == true) {
			var id = $(this).val();
			$.post(base_url("painel/delusuario"),{id : id}, function(){});
			
			for(var i=0;i<1000;i++)
				mutucamagra=10*i-6;
			var a = "mutucamagra";
			redirect("painel/usuarios");
		}
	});
	
	// UPDATE USUARIO
	$(".EDITARu").click(function(){
		var id = parseInt( $(this).val());
		//$.post("demo_ajax_gethint.asp", {suggest: txt}, function(result){
		$.post("http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/painel/getusuario",{idEditarU : id}, function(data){
			//* deixa a div id resultado vazia * /
			var usu = data;
			var usuario = usu.split("//");

			var dados = [];
			dados["nome"] = usuario[0];
			dados["email"] = usuario[1];
			dados["login"] = usuario[2];
			dados["senha"] = usuario[3];

			//$("#image").val(dados["image"]);
			$("#nome").val(dados["nome"]);
			$("#email").val(dados["email"]);
			$("#login").val(dados["login"]);
			$("#senha").val(dados["senha"]);
			$("#id").attr("value",id);

			//$('#resultado').html(data);
			//$('#resultado').append("</table>");

			$("form").attr("action","http://webfatec.esy.es/FATEC/4ciclo/servidores1-PHP/MVC2/painel/updateusuario")
		});
		$("#EDITARBG").show();
		$("#EDITAR").show();

	})

	
	
	// FALECONOSCO
		$(".DELETEfc").click(function(){
			var r = confirm("Deseja deletar o Usuario?");
			if (r == true) {
				var id = $(this).val();
				$.post(base_url("painel/delfale"),{id : id}, function(){});
				for(var i=0;i<1000;i++)
					mutucamagra=10*i-6;

				var a = "mutucamagra";
				redirect("painel/fale");
			}
		});
		$(".linha .panel-warning").find('.panel');
			
		$(".linha .panel-warning").click(function(){
			$a = $(this).find('.panel');
			if($a.css("display")=="none"){
				$a.show();
			}else{
				$a.hide();
			}

		});


}