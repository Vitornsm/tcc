<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ADM</title>
	<link rel ="stylesheet" type="text/css" href="css/estilos2.css">
</head>
<body>
	<form  enctype="multipart/form-data" method="POST" class="texto">
		<center>
			<h1>Código de Verificação</h1>

			<input type="text" name="txtcodveri" class="txtbox2"><br><br>
			<input type="submit" value="Entrar" name="btnentrar" class="butom">
			<input type="reset" value="Limpar" name="" class="butom">

			<?php
				session_start(); # Deve ser a primeira linha do arquivo

				include('conexao.php');

				
				$entarcod=filter_input(INPUT_POST, 'btnentrar', FILTER_SANITIZE_STRING);

				$codlogverif=filter_input(INPUT_POST, 'txtcodveri', FILTER_SANITIZE_STRING);

				$codenviado= $_SESSION['frase'];

				if($entarcod == "Entrar")
				{
					if($codlogverif !=null)
					{
						if($codenviado == $codlogverif)
						{
							echo ('<meta http-equiv="refresh"content=0;"PGIsertAdministratorLivros5642.php">');
						}
						else
						{
							echo '<center><h3 style="color: red;">';
							echo 'Código Inválido';
							echo '</h3></center>';						
						}
					}
					else
					{
						echo '<center><h3 style="color: red;">';
						echo 'Preencha o campo';
						echo '</h3></center>';
					}
				}
			?>
		</center>
	</form>
</body>
</html>