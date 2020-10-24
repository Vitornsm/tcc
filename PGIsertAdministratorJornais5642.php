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
				<a href="PGIsertAdministratorJornais5642.php" class="celecionado">Jornais</a>
				<a href="PGIsertAdministratorMidias5642.php" class="butom">Mídias</a>
				<a href="PGIsertAdministratorRevistas5642.php" class="butom">Revistas</a><br><br>

			</center>

			<div class="espaco_esquerdo">

				<h1>Isserir Jornal</h1>

				<table>
					<tr>
						<td>Nome</td>
						<td><input type="text" name="txtnomejonal" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Assunto</td>
						<td><input type="text" name="txtassuntojornal" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Data</td>
						<td><input type="date" name="txtdata" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Subpasta</td>
						<td><input type="text" name="txtsubpastajornal" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Imagem do Jornal</td>
						<td><input type="file"  name="imgboxjornal" class="txtbox3"></td>
					</tr>
				</table><br>

				<input type="submit" value="Inserir" name="cadastrarjosnal" class="butom">&nbsp &nbsp &nbsp
				<input type="reset" value="Limpar" name="" class="butom">

				<?php

					include "conexao.php";

					$botao= filter_input(INPUT_POST, 'cadastrarjosnal' , FILTER_SANITIZE_STRING);

					$nomejornal= filter_input(INPUT_POST, 'txtnomejonal' , FILTER_SANITIZE_STRING);
					$asuntojornal= filter_input(INPUT_POST, 'txtassuntojornal' , FILTER_SANITIZE_STRING);
					$datajornal= filter_input(INPUT_POST, 'txtdata' , FILTER_SANITIZE_STRING);
					$subpastajornal= filter_input(INPUT_POST, 'txtsubpastajornal' , FILTER_SANITIZE_STRING);
					
					if($botao == "Inserir")
					{
						if($nomejornal && $asuntojornal && $datajornal && $subpastajornal !=null)
						{
							$_UP['pasta'] = 'upload/';	

							if(isset($_FILES['imgboxjornal']));
							{
								$arquivo = $_FILES['imgboxjornal'];
								$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
								$novo_nome = md5(uniqid($arquivo['name'])).".".$extensao;

								move_uploaded_file($_FILES['imgboxjornal']['tmp_name'], $_UP['pasta'].$novo_nome);

								$sql_code ="INSERT INTO `tb_jornais` (`NOME_JORNAL`, `ASSUNTO_JORNAL`, `DATA_JORNAL`, `SUBPASTA_JORNAL`, `IMG_JORNAL`) VALUES ('$nomejornal', '$asuntojornal', '$datajornal', 
								'$subpastajornal', '$novo_nome')";

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
				<h1>Delatar Jornal</h1>
				<table>
					<tr>
						<td>Numero</td>
						<td><input type="text" name="txtdeletarjornal" class="txtbox3"></td>
					</tr>
				</table>
				<input type="submit" value="Deletar" name="btndeletarjornal" class="butom">
				<?php

					$botao2 = filter_input(INPUT_POST, 'btndeletarjornal' , FILTER_SANITIZE_STRING);

					$delatarjornal = filter_input(INPUT_POST, 'txtdeletarjornal' , FILTER_SANITIZE_STRING);

					if($botao2 == "Deletar")
					{
						if($delatarjornal != null)
						{
							$sql_code ="DELETE FROM `tb_jornais` WHERE `tb_jornais`.`NUM_JORNAL` = '$delatarjornal'";

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