
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
Create Procedure sp
	@mes int,
	@ano int
as
	
	


		
		 
	
	