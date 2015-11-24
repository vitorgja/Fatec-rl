

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