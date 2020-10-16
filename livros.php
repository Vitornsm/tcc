<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Livro - Pesquisar</title>	
		<link rel ="stylesheet" type="text/css" href="css/estilos.css">	
	</head>
	<body>
		<center>
			<h1>Pesquisar Livros</h1>
			
				<form enctype="multipart/form-data" method="POST" action="" class="texto">
					<input type="text" name="nome" placeholder="Digite o nome, autor, ano..." class = "txtbox"><br><br>
				
					<input name="SendPesqUser" type="submit" value="Pesquisar"class = "butom"><br><br>

				</form><br><br>
		</center>
		
		<?php

			$Caixa=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$radionome= filter_input(INPUT_POST, 'radiolivro' , FILTER_SANITIZE_STRING);
			$botao= filter_input(INPUT_POST, 'SendPesqUser' , FILTER_SANITIZE_STRING);

			if ($botao == "Pesquisar") 
			{
				if ($Caixa == "LG_COD_ACCESS_5241")
				{
					echo "<script> alert ('Bem vindo a página do adiministrador') </script>";
					echo ('<meta http-equiv="refresh"content=0;"PGcodLogAdministrator5241.php">');
				}
				else
				{
					$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);

					$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

						$result_usuario = "SELECT  * FROM tb_livros WHERE COD_LIVRO LIKE '$nome' OR
																		 NOME_LIVRO  LIKE '%$nome%' OR
																		 GEN_LIVRO LIKE '%$nome%' OR 
																		 COD_AUTOR_LIVRO LIKE '$nome' OR
																		 NOME_AUTOR_LIVRO LIKE '%$nome%' OR 
																		 EDITORA_LIVRO LIKE '%$nome%' OR
																		 LOCAL_LIVRO LIKE '%$nome%' OR
																		 ANO_LIVRO LIKE '$nome'
																		 ORDER BY NOME_LIVRO ASC";

						$resultado_usuario = mysqli_query($conn, $result_usuario);

 					
						echo'<center><table border=2 class="texto">';

					while($row_usuario = mysqli_fetch_assoc($resultado_usuario))
					{
						
 						$IMGlivro = $row_usuario['IMG_LIVRO'];
 						
						echo '<tr>';
						echo ('<td>' . $row_usuario['NUM_LIVRO'] . '</td>' );
						echo '<td><img src ="upload/' . $IMGlivro . '" width="88px" height="88px"></td>';		
						echo ('<td>' . $row_usuario['NOME_LIVRO'] . '<br><br>' );
						echo ('' . $row_usuario['NOME_AUTOR_LIVRO'] . '&nbsp&nbsp&nbsp&nbsp&nbsp</td>' );
						echo ('<td><h4>Código Livro:</h4>' . $row_usuario['COD_LIVRO'] . '</td>' );
						echo ('<td><h4>Código Autor:</h4>' . $row_usuario['COD_AUTOR_LIVRO'] . '</td>' );
						echo ('<td>' . $row_usuario['GEN_LIVRO'] . '</td>' );
						echo ('<td><h4>Editora:</h4>' . $row_usuario['EDITORA_LIVRO'] . '</td>' );
						echo ('<td>' . $row_usuario['LOCAL_LIVRO'] . '</td>' );
						echo ('<td>' . $row_usuario['ANO_LIVRO'] . '</td>' );
						echo '</tr>';
					}
					echo '</table><br></cetnter>';
				}	
			}

		?>
	</body>
</html>