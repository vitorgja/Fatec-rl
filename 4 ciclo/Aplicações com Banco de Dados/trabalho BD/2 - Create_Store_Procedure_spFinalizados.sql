 CREATE PROCEDURE SP_COPIA_PEDIDOS
(
  @ANO_MES CHAR(06)
)
AS
BEGIN

  SELECT CD_PEDIDO
  INTO #TMP_PEDIDO_FINALIZADO
  FROM TB_PEDIDO
  WHERE CONVERT(CHAR(06), DT_PEDIDO, 112) = @ANO_MES

  INSERT TB_PEDIDO_FINALIZADO
  SELECT A.CD_PEDIDO
        ,A.CD_CLIENTE
        ,A.DT_PEDIDO
  FROM TB_PEDIDO A INNER JOIN #TMP_PEDIDO_FINALIZADO B ON (A.CD_PEDIDO = B.CD_PEDIDO)
  
  INSERT TB_PEDIDO_PECA_FINALIZADO
  SELECT A.CD_PEDIDO
        ,A.CD_PECA
        ,A.QT_PECA
  FROM TB_PEDIDO_PECA A INNER JOIN #TMP_PEDIDO_FINALIZADO B ON (A.CD_PEDIDO = B.CD_PEDIDO)
  
  DELETE A
  FROM TB_PEDIDO_PECA A INNER JOIN #TMP_PEDIDO_FINALIZADO B ON (A.CD_PEDIDO = B.CD_PEDIDO)
  
  DELETE A
  FROM TB_PEDIDO A INNER JOIN #TMP_PEDIDO_FINALIZADO B ON (A.CD_PEDIDO = B.CD_PEDIDO) 
END
*/

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

	
	