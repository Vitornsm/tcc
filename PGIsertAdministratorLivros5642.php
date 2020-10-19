<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	<title>ADM</title>
	<link rel ="stylesheet" type="text/css" href="css/estilos2.css">
</head>
	<body>
		<form accept-charset="utf-8" method="POST" class="texto" enctype="multipart/form-data">
			<center>

				<h1>Adicionar a biblioteca</h1>

				<a href="PGIsertAdministratorLivros5642.php" class="celecionado">Livros</a>
				<a href="PGIsertAdministratorJornais5642.php" class="butom">Jornais</a>
				<a href="PGIsertAdministratorMidias5642.php" class="butom">Mídias</a>
				<a href="PGIsertAdministratorRevistas5642.php" class="butom">Revistas</a><br><br>

			</center>

			<div class="espaco_esquerdo">

				<h1>Inserir Livro</h1>

				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtcodlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Nome</td>
						<td><input type="text" name="txtnomelivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Genero</td>
						<td><input type="text" name="txtgenlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Código Autor</td>
						<td><input type="text" name="txtcodautorlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Autor</td>
						<td><input type="text" name="txtatutorlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Editora</td>
						<td><input type="text" name="txteditorlivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Local</td>
						<td><input type="text" name="txtlocallivro" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Ano</td>
						<td><input type="text" name="txtanolivro" class="txtbox3"></td>
					</tr>

					<tr>
						<td>Imagem do livro</td>
						<td><input type="file"  name="imgboxlivro" class="txtbox3"></td>
					</tr>

				</table><br>

				<input type="submit" value="Inserir" name="cadastrarlivro" class="butom">&nbsp &nbsp &nbsp
				<input type="reset" value="Limpar" name="" class="butom">

				<h1>Deletar Livro</h1>

				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtdelcodlivro" class="txtbox3"></td>
					</tr>
				</table>

				<input type="submit" value="Deletar" name="deletarlivro" class="butom">&nbsp &nbsp &nbsp
				


				<?php
				
					include "conexao.php";

					$botao= filter_input(INPUT_POST, 'cadastrarlivro' , FILTER_SANITIZE_STRING);
					$botao2= filter_input(INPUT_POST, 'deletarlivro' , FILTER_SANITIZE_STRING);

					$codlivro= filter_input(INPUT_POST, 'txtcodlivro',FILTER_SANITIZE_STRING);
					$nomelivro= filter_input(INPUT_POST, 'txtnomelivro',FILTER_SANITIZE_STRING);
					$generolivro= filter_input(INPUT_POST, 'txtgenlivro',FILTER_SANITIZE_STRING);
					$codautorlivro= filter_input(INPUT_POST, 'txtcodautorlivro',FILTER_SANITIZE_STRING);
					$autorlivro= filter_input(INPUT_POST, 'txtatutorlivro',FILTER_SANITIZE_STRING);
					$editoralivro= filter_input(INPUT_POST, 'txteditorlivro',FILTER_SANITIZE_STRING);
					$locallivro= filter_input(INPUT_POST, 'txtlocallivro',FILTER_SANITIZE_STRING);
					$anolivro= filter_input(INPUT_POST, 'txtanolivro',FILTER_SANITIZE_STRING);

					$delcodlivro= filter_input(INPUT_POST, 'txtdelcodlivro',FILTER_SANITIZE_STRING);
					

					if ($botao == "Inserir") 
					{
						if($codlivro && $nomelivro && $generolivro && $codautorlivro && $autorlivro && $editoralivro && $anolivro != null)
						{		
							$_UP['pasta'] = 'upload/';	

							if(isset($_FILES['imgboxlivro']));
							{
								$arquivo = $_FILES['imgboxlivro'];
								$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
								$novo_nome = md5(uniqid($arquivo['name'])).".".$extensao;

								move_uploaded_file($_FILES['imgboxlivro']['tmp_name'], $_UP['pasta'].$novo_nome);

								$sql_code ="INSERT INTO `tb_livros`(`COD_LIVRO`, `NOME_LIVRO`, `GEN_LIVRO`, `COD_AUTOR_LIVRO`, 
								`NOME_AUTOR_LIVRO`, `EDITORA_LIVRO`, `LOCAL_LIVRO`, `ANO_LIVRO`, `IMG_LIVRO`) VALUES ('$codlivro',
								'$nomelivro','$generolivro','$codautorlivro','$autorlivro','$editoralivro','$locallivro','$anolivro',
								'$novo_nome')";

								if(mysqli_query($conn, $sql_code))
								{
									
									echo "<script>alert('Arquivo enviado com susesso');</script>";
								}
								else
								{
									echo '<h3 style="color: red;">';
									echo 'Dados já cadastrados';
									echo '</h3>';
								}		
							}
						}
						else
						{
							echo '<h3 style="color: red;">';
							echo 'Preencha todos os campos';
							echo '</h3>';
						}						
					}

					if ($botao2 =="Deletar") 
					{
						if($delcodlivro != null)
						{
							$sql_code ="DELETE FROM `tb_livros` WHERE `tb_livros`.`COD_LIVRO` = '$delcodlivro'";

								if(mysqli_query($conn, $sql_code))
								{
									
									echo "<script>alert('Arquivo Deletado com susesso');</script>";
								}
								else
								{
									echo '<h3 style="color: red;">';
									echo 'Código não existe';
									echo '</h3>';
								}	
						}
						else
						{
							echo '<h3 style="color: red;">';
							echo 'Preencha o campo';
							echo '</h3>';
						}	
					}
				?>
			</div>
		</form>

	</body>
</html>