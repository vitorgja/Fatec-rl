<!-- SESSÃO CONTENT (CONTEUDO) -->
<main id="conteudo">

<div class="container">
<div class="page-header">
<h1>Pacotes</h1>
</div>
<div class="panel panel-default">
<!-- Default panel contents -->
<div class="panel-heading">
Lista de Pacotes
<div class="navbar-right">
<a id="addPacote" class="btn-primary btn-sm"><span class="glyphicon glyphicon-plus"> Adicionar </span></a>
</div>
</div>
<!-- EDITAR -->
<div id="EDITARBG"></div>
<div id="EDITAR" class="panel panel-default">
<!-- Default panel contents -->
<div class="panel-heading">Editar Pacote
<div class="">
<button type="button" class="close panel-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
</div>
<form action="<?= base_url("painel/updatepacotes") ?>" role="form" class="well" method="post"  enctype="multipart/form-data">
<p>
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" title="Nome" class="form-control" placeholder="Nome" size="45" maxlength="40">
</p>

<p>
<label for="descricao">Descrição:</label>
<textarea class="form-control"name="descricao" id="descricao" title="Mensagem" rows="3"></textarea>
</p>

<p>
<label for="pagamento">Pagamento:</label>
<input type="text" name="pagamento" id="pagamento" title="Cidade" class="form-control" placeholder="Forma Pagamento">
</p>

<p>
<label class="form-group" for="validade">Validade:</label>
<input type="datetime" name="validade" id="validade" title="validade" class="form-control" id="validade" placeholder="05/06/2015 19:17:00">
</p>

<p id="pImg" class="panel-left">
<img src="" alt="" id="Img" class="img-thumbnail">
</p>

<p>
<label for="imagem" >Imagem:</label>
<input type='file' name="image" id="imagem" >
</p>

<p>
<input type="hidden" id="id" name="id" value="">
<input type="submit" class="btn btn-primary" value="Salvar">
	<input type="reset" class="btn btn-primary" value="Redefinir">

<!--<button id="show-alert-sucess" type="button" class="btn btn-primary" value="Button">Salvar</button>-->
</p>

</form>

</div>
<!-- FIM EDITAR -->

<div  class="table-responsive">
<!-- Table -->
<table class="table">
<tr>
<th>Image</th>
<th>Nome</th>
<th>Pagamento</th>
<th>Alterações</th>
</tr>

<? foreach($pacotes as $key){ ?>
<tr>
<td><img src="<?= base_url('view/'.$key->getImage())?>" alt="<?= $key->getNome()?>" class="img-thumbnail"></td>
<td><?= $key->getNome() ?></td>
<td><?= $key->getPagamento() ?></td>

<td><!--
<a class="editar"><span class="Disabled"><?= $key->getId() ?></span>editar</a> 
| 
<button class="DELETEp" value="<?= $key->getId() ?>">apagar</button>
-->
<button class="EDITARp btn btn-sm btn-info" value="<?= $key->getId() ?>">editar</button> | 
<button class="DELETEp btn btn-sm btn-warning" value="<?= $key->getId() ?>">deletar</button>
</td>
</tr>
<? }  // fecha o foreach ?>
</table> 
</div>
</div>
<br class="clearfix">
</div><!-- fecha class container -->
</main><!-- fecha id #conteudo -->

