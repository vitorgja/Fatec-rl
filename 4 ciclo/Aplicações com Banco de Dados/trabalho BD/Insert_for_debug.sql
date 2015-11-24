
use TrabalhoBD
go

--
-- Insert for Debug

-- Insert cliente
insert into Cliente  
	(nm_Cliente,cd_telefone_Cliente,ds_email_Cliente,cd_CGC) values 
	( 'Loja 1', '(11) 987654321', 'loja1@email.com', 11111 	),
	( 'Loja 2', '(12) 987654321', 'loja2@email.com', 22222	),
	( 'Loja 3', '(13) 987654321', 'loja3@email.com', 33333 	)
go

-- Insert Fornecedor
insert into Fornecedor
	(nm_Fornecedor,cd_telefone_Fornecedor,ds_email_Fornecedor) values
	( 'New Products International LTDA', '(77) 987654321', 'npi@email.com' ),
	( 'Quality Product LTDA', '(88) 987654321', 'qp@email.com' ),
	( 'Ze dos Produtos ME', '(99) 987654321', 'ze@email.com' )
go

-- Insert Ordem_Compra
insert into Ordem_Compra
	( cd_Fornecedor,dt_prevista_Ordem_Compra,dt_chegada_Ordem_Compra ) values
	( 1,'2015-05-12','2015-06-12' ),
	( 2,'2015-05-12','2015-06-12' ),
	( 3,'2015-05-12','2015-06-12' )


-- Insert Peca
insert into Peca
	(ds_Peca,qt_estoque_Peca,qt_estoque_minimo_Peca,vl_preco) values
	('Carrinho de Controle Remoto',25,3,125.50),
	('Barquinho de Controle Remoto',25,3,249.99),
	('Helicoptero de Controle Remoto',25,3,499.99)

-- Insert Ordem_Compra_has_Peca
insert into Ordem_Compra_has_Peca
	values
	(1,3,15),
	(2,1,10),
	(3,2,5)

-- Insert Pedido
insert into Pedido
	(cd_Cliente,qt_Pedido) values
	(1,1),
	(2,1),
	(3,1)

-- Insert Peca_has_Pedido
insert into Peca_has_Pedido
	values
	(1,2,5),
	(2,3,5),
	(3,1,5)

-- Insert Receptaculo
insert into Receptaculo
	(qt_Peca,cd_Peca) values
	(10,1),
	(8,2),
	(6,3)