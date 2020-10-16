<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Revista - Pesquisar</title>	
		<link rel ="stylesheet" type="text/css" href="css/estilos.css">	
	</head>
	<body>
		<center>
			<h1>Pesquisar Revista</h1>
			
				<form method="POST" action="" class="texto">
					<input type="text" name="nome" placeholder="Digite o nome, codigo, editora..." class = "txtbox"  ><br><br>
				
					<input name="SendPesqUser" type="submit" value="Pesquisar"class = "butom"><br><br>

				</form><br><br>
		</center>

		
		
		<?php

			$Caixa=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$radionome= filter_input(INPUT_POST, 'radiolivro' , FILTER_SANITIZE_STRING);
			$botao= filter_input(INPUT_POST, 'SendPesqUser' , FILTER_SANITIZE_STRING);

			if ($botao == "Pesquisar") 
			{
			
				$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);

				$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

					$result_usuario = "SELECT  * FROM tb_revistas WHERE COD_REVISTA LIKE '$nome' OR
																	 NOME_REVISTA LIKE '%$nome%' OR
																	 EDITORA_REVISTA LIKE '%$nome%'
																	 ORDER BY NOME_REVISTA ASC";

					$resultado_usuario = mysqli_query($conn, $result_usuario);
				
					echo'<center><table border = 1 class="texto">';

				while($row_usuario = mysqli_fetch_assoc($resultado_usuario))
				{
					$IMGrevista=$row_usuario['IMG_REVISTA'];

					echo '<tr>';
					echo ('<td>' . $row_usuario['NUM_REVISTA'] . '</td>' );
					echo '<td><img src ="upload/' . $IMGrevista . '" width="88px" height="88px"></td>';
					echo ('<td>' . $row_usuario['NOME_REVISTA'] . '</td>' );
					echo ('<td><h4>Código:</h4>' . $row_usuario['COD_REVISTA'] . '</td>' );
					echo ('<td><h4>Editora:</h4>' . $row_usuario['EDITORA_REVISTA'] . '</td>' );
					echo '</tr>';
					
				}
				echo '</table></center>';
			}

		?>
	</body>
</html>