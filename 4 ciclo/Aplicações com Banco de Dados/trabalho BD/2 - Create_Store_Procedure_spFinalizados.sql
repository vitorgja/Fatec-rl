use TrabalhoBD
go
--
-- Store Procedure
--

-- Procedure 2
Create Procedure spFinalizados

	@anoMes varchar(6)
as
begin
	select cd_Pedido into #Pedido_finalizado from Pedido 
		where convert( char(06), dt_Pedido, 112 ) = @anoMes


	insert into Pedido_finalizado ( cd_Pedido_finalizado, B.cd_Cliente, qt_Pedido_finalizado ) 
		select cd_Pedido,B.cd_Cliente,qt_Pedido from Pedido A 
			inner join Pedido_finalizado B on A.cd_Pedido = B.cd_Pedido_finalizado
			
	insert into Peca_has_Pedido_finalizado (cd_Peca,cd_Pedido_finalizado,qt_peca) 
		select cd_Peca, cd_Pedido_finalizado, qt_peca from Peca_has_Pedido PhasP
			inner join #Pedido_finalizado P on PhasP.cd_Pedido = P.cd_Pedido

	
	delete PhasP from Peca_has_Pedido PhasP inner join #Pedido_finalizado P on PhasP.cd_Pedido = P.cd_Pedido  
			
	delete P from Pedido P inner join #Pedido_finalizado PF on (P.cd_Pedido = PF.cd_Pedido) 
	
	Print 'spFinalizados Executada com sucesso!'
end

exec spFinalizados '201510'

	
	