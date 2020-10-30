<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ADM</title>
	<link rel ="stylesheet" type="text/css" href="css/estilos2.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

  <!-- Estilos CSS e Bootstrap-->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="css/styles.css">
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