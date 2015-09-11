
$(document).ready( function() {
  $("#formulario").validate({
    // Define as regras
    rules:{
      nome:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
      sexo:{
        // campoSexo será obrigatório (required) e precisará ser um e-mail válido (email)
        required: true
      },
      idade:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
	  profissao:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      nome:{
        required: "Digite o seu nome",
        minLength: "O seu nome deve conter, no mínimo, 2 caracteres"
      },
      sexo:{
        required: "Selecione o sexo"
      },
      idade:{
        required: "Digite sua Idade.",
        minLength: "A sua mensagem deve conter, no mínimo, 2 caracteres"
      },
      profissao:{
        required: "Seleciona sua profissão",
        minLength: "Selecione uma profissão"
      }
    }
  });
});

