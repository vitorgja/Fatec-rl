
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
		(cd_Peca, cd_Pedido, qt_peca )
		values (@pedido, @codigo, @quantidade)
	
	
	--
	Update Peca
		set qt_estoque_Peca = ( qt_estoque_Peca - @quantidade )
		where cd_Peca = @codigo

	Print 'spRecebimento Executada com sucesso'
	

exec spRecebimento 1, 2, 5
exec spRecebimento 3, 3, 5	