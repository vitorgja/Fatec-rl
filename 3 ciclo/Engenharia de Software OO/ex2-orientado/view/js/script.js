
$(document).ready( function() {
  $("#formulario").validate({
    // Define as regras
    rules:{
      nome:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
      sexo:{
        // campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
        required: true
      },
      idade:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
	  profssao:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      nome:{
        required: "Digite o seu nome",
        minLength: "O seu nome deve conter, no mínimo, 2 caracteres"
      },
      sexo:{
        required: "Selecione o Sexo",
        email: "Digite um e-mail válido."
      },
      idade:{
        required: "Digite sua Idade.",
        minLength: "A sua mensagem deve conter, no mínimo, 2 caracteres"
      }
    }
  });
});

