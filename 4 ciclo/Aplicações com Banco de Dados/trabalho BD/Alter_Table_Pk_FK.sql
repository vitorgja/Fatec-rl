use TrabalhoBD

-- Create PK FK


-- 
-- Add Primary Key
--

-- PK Fornecedor
Alter table Fornecedor
	add constraint pk_Fornecedor primary key ( cd_Fornecedor )
go

-- PK Ordem_Compra
Alter table Ordem_Compra
	add constraint pk_Ordem_Compra primary key ( cd_Ordem_Compra )
go

-- PK Receptaculo
Alter table Receptaculo
	add constraint pk_Receptaculo primary key ( cd_Receptaculo )
go

-- PK Peca
Alter table Peca
	add constraint pk_Peca primary key ( cd_Peca )
go

-- PK Cliente
Alter table Cliente
	add constraint pk_Cliente primary key ( cd_Cliente )
go

-- PK Pedido
Alter table Pedido
	add constraint pk_Pedido primary key ( cd_Pedido )
go

--
-- Add Foreign Key
--

-- FK Ordem_Compra
Alter table Ordem_Compra
	add constraint fk_Ordem_Compra foreign Key ( cd_Fornecedor )
	references Fornecedor
go

-- FK Receptaculo
Alter table Receptaculo
	add constraint fk_Receptaculo foreign key ( cd_Peca )
	references Peca
go

-- FK Pedido
Alter table Pedido
	add constraint fk_Pedido foreign key ( cd_Cliente )
	references Cliente
go
--
-- FK TABLE has TABLE
--

-- FK Ordem_Compra_has_Peca
Alter table Ordem_Compra_has_Peca
	add constraint fk_Ordem_Compra_has_Peca_OC foreign key ( cd_Ordem_Compra )
	references Ordem_Compra
go
--
Alter table Ordem_Compra_has_Peca
	add constraint fk_Ordem_Compra_has_Peca_P foreign key ( cd_Peca )
	references Peca
go

-- FK Peca_has_Pedido
Alter table Peca_has_Pedido
	add constraint fk_Peca_has_Pedido_Pedido foreign key ( cd_Peca )
	references Peca
go
--
Alter table Peca_has_Pedido
	add constraint fk_Peca_has_Pedido_Peca foreign key ( cd_Pedido )
	references Pedido
go

	
--
-- Pedidos Finalizados ( Procedure 2 )
--

-- TB`s Pedidos finalizados
-- PK Pedido
--
 
-- PK Pedido finalizado
Alter table Pedido_finalizado
	add constraint pk_Pedido_finalizado primary key ( cd_Pedido_finalizado )
go

--
-- Foreign Key
--

-- FK Pedido
Alter table Pedido_finalizado
	add constraint fk_Pedido_finalizado foreign key ( cd_Cliente )
	references Cliente
go

-- FK Peca_has_Pedido_finalizado
Alter table Peca_has_Pedido_finalizado
	add constraint fk_Peca_has_Pedido_finalizado foreign key ( cd_Pedido_finalizado )
	references Pedido_finalizado
go


-- FK Peca_Requisicao
Alter table Peca_Requisicao
	add constraint fk_Peca_Requisicao foreign key ( cd_Peca_Requisicao )
	references Peca