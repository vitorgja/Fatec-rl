use TrabalhoBD
go


Create Trigger trPecasExcluidas on Peca
instead of delete
as
begin
	insert Historico_Pecas_Excluidas
		select cd_Peca, ds_Peca, suser_name(), getdate()
			from deleted where qt_estoque_Peca <= 0

	delete OChasP from Ordem_Compra_has_Peca OChasP inner join deleted d 
		on d.cd_Peca = OChasP.cd_Peca
		where d.qt_estoque_Peca <= 0

	delete r from Receptaculo r inner join deleted d 
		on d.cd_Peca = r.cd_Peca
		where d.qt_estoque_Peca <= 0

	delete PChasP from Peca_has_Pedido PChasP inner join deleted d 
		on d.cd_Peca = PChasP.cd_Peca
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

delete from Peca where cd_Peca = 2 

update Peca set qt_estoque_Peca = 0 where cd_Peca=3
print 'Peca alterada \n'
delete from Peca where cd_Peca = 3 