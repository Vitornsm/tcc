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
				<a href="PGIsertAdministratorMidias5642.php" class="celecionado">Mídias</a>
				<a href="PGIsertAdministratorRevistas5642.php" class="butom">Revistas</a><br><br>

			</center>

			<div class="espaco_esquerdo">

				<h1>Isserir Mídias</h1>

				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtcodmidia" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Nome</td>
						<td><input type="text" name="txtnomemidia" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Duraçâo</td>
						<td><input type="time" name="txtduracaomidia" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Empresa</td>
						<td><input type="text" name="txtempresamidia" class="txtbox3"></td>
					</tr>
					<tr>
						<td>Imagem da Mídias</td>
						<td><input type="file"  name="imgboxmidia" class="txtbox3"></td>
					</tr>
				</table><br>

				<input type="submit" value="Inserir" name="cadastrarmidia" class="butom">&nbsp &nbsp &nbsp
				<input type="reset" value="Limpar" name="" class="butom">

					<?php

						include "conexao.php";

						$botao= filter_input(INPUT_POST, 'cadastrarmidia' , FILTER_SANITIZE_STRING);

						$codmidia= filter_input(INPUT_POST, 'txtcodmidia' , FILTER_SANITIZE_STRING);
						$nomemidia= filter_input(INPUT_POST, 'txtnomemidia' , FILTER_SANITIZE_STRING);
						$duracaomidia= filter_input(INPUT_POST, 'txtduracaomidia' , FILTER_SANITIZE_STRING);
						$empresamidia= filter_input(INPUT_POST, 'txtempresamidia' , FILTER_SANITIZE_STRING);

						if($botao == "Inserir")
						{
							if($codmidia && $nomemidia && $duracaomidia && $empresamidia !=null)
							{
								$_UP['pasta'] = 'upload/';	

								if(isset($_FILES['imgboxmidia']));
								{
									$arquivo = $_FILES['imgboxmidia'];
									$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
									$novo_nome = md5(uniqid($arquivo['name'])).".".$extensao;

									move_uploaded_file($_FILES['imgboxmidia']['tmp_name'], $_UP['pasta'].$novo_nome);

									$sql_code ="INSERT INTO `tb_midias` (`COD_MIDIA`, `NOME_MIDIA`, `DURACAO_MIDIA`, `EMPRESA_MIDIA`, `IMG_MIDIAS`) VALUES ('$codmidia', '$nomemidia', '$duracaomidia', '$empresamidia', '$novo_nome')";

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
				<h1>Delatar Mídias</h1>
				<table>
					<tr>
						<td>Código</td>
						<td><input type="text" name="txtdeletarmidia" class="txtbox3"></td>
					</tr>
				</table>
				<input type="submit" value="Deletar" name="btndeletarmidia" class="butom">
				<?php

					$botao2 = filter_input(INPUT_POST, 'btndeletarmidia' , FILTER_SANITIZE_STRING);

					$delatarmidia = filter_input(INPUT_POST, 'txtdeletarmidia' , FILTER_SANITIZE_STRING);

					if($botao2 == "Deletar")
					{
						if($delatarmidia != null)
						{
							$sql_code ="DELETE FROM `tb_midias` WHERE `tb_midias`.`COD_MIDIA` = '$delatarmidia'";

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