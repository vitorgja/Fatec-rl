<html>
	
	<body>
		<table>
			<thead>
				<td>id_usuario</td>
				<td>nm_nome</td>
				<td>nm_login</td>
				<td>nm_senha</td>
			</thead>

		<?
			foreach($lista as $key){
				echo "<tbody>";
				echo "	<td>".$key->getId()."</td>";
				echo "	<td>".$key->getNome()."</td>";
				echo "	<td>".$key->getLogin()."</td>";
				echo "	<td>".$key->getSenha()."</td>";
				echo "</tbody>";
			}	

		?>
		</table>

	</body>
</html>