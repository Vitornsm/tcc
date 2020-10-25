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

				<a href="PGIsertAdministratorLivros5642.php" class="butom">Livros</a>
				<a href="PGIsertAdministratorJornais5642.php" class="butom">Jornais</a>
				<a href="PGIsertAdministratorMidias5642.php" class="butom">Mídias</a>
				<a href="PGIsertAdministratorRevistas5642.php" class="celecionado">Revistas</a><br><br>

			</center>

			<div class="espaco_esquerdo">
				<h1>Isserir Revista</h1>

				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtcodrevista" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Nome</td>
						<td><input type="text" name="txtnomerevista" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Editora</td>
						<td><input type="text" name="txteditararevista" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Imagem da Revista</td>
						<td><input type="file"  name="imgboxRevista" class="txtbox3"></td>
					</tr>
				</table><br>


				<input type="submit" value="Inserir" name="cadastrarevista" class="butom">&nbsp &nbsp &nbsp
				<input type="reset" value="Limpar" name="" class="butom">

				<?php
				
					include "conexao.php";

					$botao= filter_input(INPUT_POST, 'cadastrarevista' , FILTER_SANITIZE_STRING);

					$codrevista= filter_input(INPUT_POST, 'txtcodrevista' , FILTER_SANITIZE_STRING);
					$nomerevista= filter_input(INPUT_POST, 'txtnomerevista' , FILTER_SANITIZE_STRING);
					$edirarevista= filter_input(INPUT_POST, 'txteditararevista' , FILTER_SANITIZE_STRING);

					if ($botao == "Inserir") 
					{
						if($codrevista && $nomerevista && $edirarevista !=null)
						{
							$_UP['pasta'] = 'upload/';	

							if(isset($_FILES['imgboxRevista']));
							{
								$arquivo = $_FILES['imgboxRevista'];
								$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
								$novo_nome = md5(uniqid($arquivo['name'])).".".$extensao;

								move_uploaded_file($_FILES['imgboxRevista']['tmp_name'], $_UP['pasta'].$novo_nome);

								$sql_code="INSERT INTO `tb_revistas` (`COD_REVISTA`, `NOME_REVISTA`, `EDITORA_REVISTA`, `IMG_REVISTA`) VALUES ('$codrevista', '$nomerevista', '$edirarevista', '$novo_nome');";

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

				?>
			</div>

			<div>
				<h1>Delatar Revista</h1>
				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtdeletarrevista" class="txtbox3"></td>
					</tr>
				</table>
				<input type="submit" value="Deletar" name="btndeletarrevista" class="butom">
				<?php

					$botao2 = filter_input(INPUT_POST, 'btndeletarrevista' , FILTER_SANITIZE_STRING);

					$delatarrevista = filter_input(INPUT_POST, 'txtdeletarrevista' , FILTER_SANITIZE_STRING);

					if($botao2 == "Deletar")
					{
						if($delatarrevista != null)
						{
							$sql_code ="DELETE FROM `tb_revistas` WHERE `tb_revistas`.`COD_REVISTA` = '$delatarrevista'";

								if(mysqli_query($conn, $sql_code))
								{
									
									echo "<script>alert('Arquivo Deletado com susesso');</script>";
								}
								else
								{
									echo '<h3 style="color: red;">';
									echo 'Numero não existe';
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
