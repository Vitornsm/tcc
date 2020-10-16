<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Midías - Pesquisar</title>	
		<link rel ="stylesheet" type="text/css" href="css/estilos.css">	
	</head>
	<body>
		<center>
			<h1>Pesquisar Mídias</h1>
			
				<form method="POST" action="" class="texto">
					<input type="text" name="nome" placeholder="Digite o nome, codigo, empresa..." class = "txtbox"  ><br><br>
				
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

					$result_usuario = "SELECT * ,TIME_FORMAT(DURACAO_MIDIA,'%H:%i')as DURACAO_MIDIA FROM tb_midias WHERE 
																	 COD_MIDIA LIKE '$nome' OR
																	 NOME_MIDIA  LIKE '%$nome%' OR
																	 EMPRESA_MIDIA LIKE '%$nome%'
																	 ORDER BY NOME_MIDIA ASC";

					$resultado_usuario = mysqli_query($conn, $result_usuario);
				
					echo'<center><table border = 1 class="texto">';

				while($row_usuario = mysqli_fetch_assoc($resultado_usuario))
				{
					$IMGmidias=$row_usuario['IMG_MIDIAS'];

					echo '<tr>';
					echo ('<td>' . $row_usuario['NUM_MIDIA'] . '</td>' );
					echo '<td><img src ="upload/' . $IMGmidias . '" width="88px" height="88px"></td>';
					echo ('<td>' . $row_usuario['NOME_MIDIA'] . '</td>' );
					echo ('<td><h4>Código:</h4>' . $row_usuario['COD_MIDIA'] . '</td>' );
					echo ('<td>' . $row_usuario['DURACAO_MIDIA'] . '</td>' );
					echo ('<td><h4>Distribuidora:</h4>' . $row_usuario['EMPRESA_MIDIA'] . '</td>' );
					echo '</tr>';

				}
				echo '</table></center>';
			}

		?>
	</body>
</html>