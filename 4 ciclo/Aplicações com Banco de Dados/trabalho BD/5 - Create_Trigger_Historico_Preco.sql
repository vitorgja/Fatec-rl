/*CREATE TRIGGER TR_HISTORICO_PRECOS ON TB_PECA
FOR UPDATE
AS
BEGIN
  INSERT TB_HISTORICO_PRECOS
  SELECT A.CD_PECA
        ,GETDATE()
        ,B.VL_PRECO
        ,A.VL_PRECO
        ,SUSER_NAME()
  FROM INSERTED A INNER JOIN DELETED B ON (A.CD_PECA = B.CD_PECA)
  WHERE A.VL_PRECO <> B.VL_PRECO
END
*/


-- Trigger trHistoricoPreco
Create Trigger trHistoricoPreco on Peca
	for Update
as
begin
	
	insert Historico_Precos
		select a.cd_Peca, getdate(), b.vl_preco, a.vl_preco, suser_name()  
			from inserted a
				inner join deleted b on (a.cd_Peca = b.cd_Peca)
			where a.vl_preco != b.vl_preco

	Print 'trHistoricoPreco executada com sucesso!'
end


update Peca set vl_Preco=35.99 where cd_Peca=1
update Peca set vl_Preco=199.98 where cd_Peca=3