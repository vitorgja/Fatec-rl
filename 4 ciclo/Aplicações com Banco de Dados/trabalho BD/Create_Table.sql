use TrabalhoBD

-- TB Fornecedor

Create table Fornecedor 
(
	cd_Fornecedor int not null identity,
	nm_Fornecedor varchar(50) not null,
	cd_telefone_Fornecedor varchar(15),
	ds_email_Fornecedor varchar(30)
);
go

-- TB Ordem_Compra
Create table Ordem_Compra (
	cd_Ordem_Compra int not null identity,
	cd_Fornecedor int not null,
	dt_prevista_Ordem_Compra date,
	dt_chegada_Ordem_Compra date
);
go

-- TB Peca
Create table Peca (
	cd_Peca int not null identity,
	ds_Peca varchar(250),
	qt_estoque_Peca int,
	qt_estoque_minimo_Peca int,
	vl_preco money
);
go

-- TB Receptaculo
Create table Receptaculo (
	cd_receptaculo int not null identity,
	qt_Peca int not null,
	cd_Peca int not null
);
go

-- TB Cliente
Create table Cliente (
	cd_Cliente int not null identity,
	nm_Cliente varchar(100) not null,
	cd_telefone_Cliente varchar(15),
	ds_email_Cliente varchar(30),
	cd_CGC int
);
go

-- TB Pedido
Create table Pedido (
	cd_Pedido int not null identity,
	cd_Cliente int,
	qt_Pedido int
);
go


-- Table has Table

-- TB Ordem_Compra has TB Peca
Create table Ordem_Compra_has_Peca (
	cd_Ordem_Compra int not null,
	cd_Peca int not null,
	qt_Peca int not null
);
go

-- TB Peca has TB Pedido
Create table Peca_has_Pedido (
	cd_Peca int not null,
	cd_Pedido int not null,
	qt_peca int not null
);
go


--
-- Pedidos Finalizados ( Procedure 2 )
--

-- TB Pedido finalizado
Create table Pedido_finalizado (
	cd_Pedido_finalizado int not null identity,
	cd_Cliente int,
	qt_Pedido_finalizado int
);

-- TB Peca has TB Pedido
Create table Peca_has_Pedido_finalizado (
	cd_Peca int not null,
	cd_Pedido_finalizado int not null,
	qt_peca int not null
);
go

--
-- Peca requisiçao
--

-- TB Peca Requisicao
Create table Peca_Requisicao (
	cd_Peca_Requisicao int not null,
	qt_estoque_Peca_Reposicao int,
	qt_comprar_Peca_Reposicao int,
);



--
-- Historico Precos
--

-- TB Historico_Precos
Create table Historico_Precos (
	cd_Peca int not null,
	dt_Alteracao date,
	vl_preco_antigo money,
	vl_preco_novo money,
	nm_usuario varchar(100)
);

