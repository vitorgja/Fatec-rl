/* CREATE PROCEDURE SP_COPIA_PEDIDOS
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
--
-- Store Procedure
--

-- Procedure 2
Create Procedure spFinalizados
	@mes varchar(2),
	@ano varchar(4),
	@anoMes varchar(6)
as
	select @anoMes = @ano + @mes

	select cd_Pedido into from Pedido 
		where convert( char(06), dt_Pedido, 112 ) = @anoMes

	insert into Pedido_finalizado (cd_Pedido_finalizado,cd_Cliente,qt_Pedido_finalizado) 
		select cd_Pedido,cd_Cliente,qt_Pedido from Pedido

	insert into Peca_has_Pedido_finalizado (cd_Peca,cd_Pedido_finalizado,qt_peca) 
		select cd_Peca,cd_Pedido,qt_peca from Peca_has_Pedido
	
	Print 'spFinalizados Executada com sucesso!'


exec spFinalizados '12', '2015'

	
	