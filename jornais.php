<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Jornais - Pesquisar</title>	
		<link rel ="stylesheet" type="text/css" href="css/estilos.css">	
	</head>
	<body>
		<center>
			<h1>Pesquisar Jornais</h1>
			
				<form method="POST" action="" class="texto">
					<input type="text" name="nome" placeholder="Digite o nome, assunto, subpasta..." class = "txtbox"  ><br><br>
				
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

					$result_usuario = "SELECT * ,date_format(DATA_JORNAL,'%d / %m / %Y')as DATA_JORNAL FROM tb_jornais WHERE 
																	  NOME_JORNAL  LIKE '%$nome%' OR
																	  ASSUNTO_JORNAL LIKE '%$nome%' OR
																	  SUBPASTA_JORNAL LIKE '$nome' OR
																	  DATA_JORNAL LIKE '%$nome%'	 
																	  ORDER BY ASSUNTO_JORNAL ASC";

					$resultado_usuario = mysqli_query($conn, $result_usuario);
				
					echo'<center><table border = 1 class="texto">';

				while($row_usuario = mysqli_fetch_assoc($resultado_usuario))
				{
					$IMGjornal = $row_usuario['IMG_JORNAL'];

					echo '<tr>';
					echo ('<td>' . $row_usuario['NUM_JORNAL'] . '</td>' );
					echo '<td><img src ="upload/' . $IMGjornal . '" width="88px" height="88px"></td>';
					echo ('<td>' . $row_usuario['NOME_JORNAL'] . '<br><br>' );
					echo ('' . $row_usuario['ASSUNTO_JORNAL'] . '</td>' );
					echo ('<td>' . $row_usuario['DATA_JORNAL'] . '</td>' );
					echo ('<td><h4>Subpasta:</h4>' . $row_usuario['SUBPASTA_JORNAL'] . '</td>' );
					echo '</tr>';
					
				}
				echo '</table></center>';
			}

		?>
	</body>
</html>