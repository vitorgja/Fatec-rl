create function sf_Fatorial(@Num int)
	returns int as
begin
	declare @Fator int, @i int
	set @Fator = 1
	set @i = 1

	if ( @Num > 1 )
		while ( @i <= @Num )
			begin
				set @Fator = @Fator * @i;
				set @i = @i + 1
			end

	return ( @Fator )
end

go
select dbo.sf_Fatorial(5)

