use TrabalhoBD
go
--
-- Store Procedure
--

-- Procedure 3
Create Procedure spRequisicao
as
begin
	insert Peca_Requisicao
		select cd_Peca, qt_estoque_Peca, qt_comprar = (qt_estoque_minimo_Peca - qt_estoque_Peca)
			from Peca where qt_estoque_Peca < qt_estoque_minimo_Peca

	Print 'spRequisicao executada com sucesso!'
end


exec spRequisicao
