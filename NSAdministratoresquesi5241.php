<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ADM</title>
	<link rel ="stylesheet" type="text/css" href="css/estilos2.css">
</head>
<body>
	<form  enctype="multipart/form-data" method="POST" class="texto">
		<center>
			<h1>Isserir nova senha</h1>

			E-mail da conta<br>
			<input type="text" name="txtemail" class="txtbox2"><br><br>
			Nova senha<br>
			<input type="password" name="txt" class="txtbox2"><br><br>	

			<input type="submit" name="" class="butom">
		</center>

		<?php

		include('conexao.php');

		$botao=filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);

		?>
		
	</form>
</body>
</html>