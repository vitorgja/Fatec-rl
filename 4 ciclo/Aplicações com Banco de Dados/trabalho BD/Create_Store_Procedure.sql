
--
-- Store Procedure
--

-- Procedure 1
Create Procedure spRecebimento 
	@pedido int,
	@codigo int,
	@quantidade int
as
	--Inserindo o Registro na TB
	Insert into Peca_has_Pedido 
		(cd_Peca,cd_Pedido,qt_Peca)
		values (@pedido, @codigo, @quantidade)
	
	
	--
	Update Peca
		set qt_estoque_Peca = ( qt_estoque_Peca - @quantidade )
		where cd_Peca = @codigo
	

-- exec spRecebimento 0, 0, 5


-- Procedure 2
Create Procedure spFinalizados
	@mes varchar(2),
	@ano varchar(2)
as

	insert into Pedido_finalizado (cd_Pedido_finalizado,cd_Cliente,qt_Pedido_finalizado) select cd_Pedido,cd_Cliente,qt_Pedido from Pedido

	insert into Peca_has_Pedido_finalizado (cd_Peca,cd_Pedido_finalizado,qt_peca) select cd_Peca,cd_Pedido,qt_peca from Peca_has_Pedido


exec spFinalizados '12' '2015'




		
		 
	
	