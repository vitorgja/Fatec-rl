/*CREATE TRIGGER TR_PECAS_EXCLUIDAS ON TB_PECA
INSTEAD OF DELETE
AS
BEGIN
  INSERT TB_HISTORICO_PECAS_EXCLUIDAS
  SELECT CD_PECA
        ,DS_PECA
        ,SUSER_NAME()
        ,GETDATE()
  FROM DELETED
  WHERE QT_ESTOQUE <= 0
  
  DELETE A
  FROM TB_PECA A INNER JOIN DELETED B ON (A.CD_PECA = B.CD_PECA)
  WHERE A.QT_ESTOQUE <= 0
  
  INSERT TB_TENTATIVAS_LOG
  SELECT GETDATE()
        ,'TENTATIVA DE EXCLUSÃO DE PEÇA'
        ,CD_PECA
        ,SUSER_NAME()
  FROM DELETED
  WHERE QT_ESTOQUE > 0
END

*/
use TrabalhoBD
go


Create Trigger trPecasExcluidas on Peca
instead of delete
as
begin
	insert Historico_Pecas_Excluidas
		select cd_Peca, ds_Peca, suser_name(), getdate()
			from deleted where qt_estoque_Peca <= 0

	delete from Receptaculo inner join deleted d 
		on d.cd_Peca = cd_Peca
		where d.qt_estoque_Peca <= 0

	delete a from Peca a 
		inner join deleted b 
			on (a.cd_Peca = b.cd_Peca)
		where a.qt_estoque_Peca <= 0 

	insert Tentativas_Log
		select getdate(), 'Tentou excluir a Peca', cd_Peca, suser_name()
			from deleted where qt_estoque_Peca > 0

	Print 'trPecasExcluidas executada com sucesso!'
end

delete from Peca where cd_Peca = 3 

update Peca set qt_estoque_Peca = 0 where cd_Peca=3
delete from Peca where cd_Peca = 3 