<!-- Formulario Ex2-->
				<form id="formulario" method="post" action="index.php">
					<label>Nome do candidato: <input type="text" name="nome"></label><br>
					<label>
						Sexo: 	<input type="radio" name="sexo" value="Masculino"> Masculino - 
						<input type="radio" name="sexo" value="Feminino"> Feminino		
					</label><br>
						<label>Pretensão salarial: <input type="text" name="salario"></label><br>
					<label>Idade: <input type="number" name="idade"></label><br>
					<label>Profissão: 
						<select name="profissao">
							<option></option>
							<option value="1">Cartógrafo</option>
							<option value="2">Assistente Social</option>
							<option value="3">Psicólogo</option>
							<option value="4">Atendente</option>
							<option value="5">Secretária Bilíngue</option>
							<option value="6">Geólogo</option>
						</select>
					</label><br><br>
					<input type="submit" value="Enviar" id="submit"> <input type="reset" value="Limpar">
				</form>