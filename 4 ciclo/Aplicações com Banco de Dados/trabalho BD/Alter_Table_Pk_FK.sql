use TrabalhoBD

-- Create PK FK


-- 
-- Add Primary Key
--

-- PK Fornecedor
Alter table Fornecedor
	add primary key ( cd_Fornecedor )
go

-- PK Ordem_Compra
Alter table Ordem_Compra
	add primary key ( cd_Ordem_Compra )
go

-- PK Receptaculo
Alter table Receptaculo
	add primary key ( cd_Receptaculo )
go

-- PK Peca
Alter table Peca
	add primary key ( cd_Peca )
go

-- PK Cliente
Alter table Cliente
	add primary key ( cd_Cliente )
go

-- PK Pedido
Alter table Pedido
	add primary key ( cd_Pedido )
go

--
-- Add Foreign Key
--

-- FK Ordem_Compra
Alter table Ordem_Compra
	add foreign Key ( cd_Fornecedor )
	references Fornecedor
go

-- FK Receptaculo
Alter table Receptaculo
	add foreign key ( cd_Peca )
	references Peca
go

-- FK Pedido
Alter table Pedido
	add foreign key ( cd_Cliente )
	references Cliente
go
--
-- FK TABLE has TABLE
--

-- FK Ordem_Compra_has_Peca
Alter table Ordem_Compra_has_Peca
	add foreign key ( cd_Ordem_Compra )
	references Ordem_Compra
go
--
Alter table Ordem_Compra_has_Peca
	add foreign key ( cd_Peca )
	references Peca
go

-- FK Peca_has_Pedido
Alter table Peca_has_Pedido
	add foreign key ( cd_Peca )
	references Peca
go
--
Alter table Peca_has_Pedido
	add foreign key ( cd_Pedido )
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
	add primary key ( cd_Pedido_finalizado )
go

--
-- Foreign Key
--

-- FK Pedido
Alter table Pedido_finalizado
	add foreign key ( cd_Cliente )
	references Cliente
go

-- Peca_has_Pedido_finalizado
Alter table Peca_has_Pedido
	add foreign key ( cd_Pedido_finalizado )
	references Pedido_finalizado
go