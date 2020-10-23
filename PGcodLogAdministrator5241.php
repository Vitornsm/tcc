<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ADM</title>
	<link rel ="stylesheet" type="text/css" href="css/estilos2.css">
</head>
<body>
	<form  enctype="multipart/form-data" method="POST" class="texto">
		<center>	
			<h1>Pagina Adiministrador</h1>	
			</select><br><br>
				Usuario<br>
				<input type="text" name="txtusuario" class="txtbox2"><br><br>
				Senha<br>
				<input type="password" name="txtsenha" class="txtbox2"><br><br>

				<input value="Login" type="submit" name="btnenviar" class="butom">
				<input value="Limpar" type="reset"  class="butom"><br><br>
				<a href="PGcodLogAdministratoresqueci5241.html" class="esqueci">Esqueceu a senha?</a>
		</center>	
		<?php
			include('conexao.php');

			$Botao=filter_input(INPUT_POST, 'btnenviar', FILTER_SANITIZE_STRING);

			if($Botao == "Login")
			{
				$MetodoUsuari = mysqli_real_escape_string($conn, $_POST['txtusuario']);

				$MetodoSenha = mysqli_real_escape_string($conn, $_POST['txtsenha']);

				$query = "SELECT * FROM login WHERE USUARIO = '{$MetodoUsuari}' AND SENHA = md5('{$MetodoSenha}')";

				$result = mysqli_query($conn, $query);

				$row = mysqli_num_rows($result);

				if($row == 1)
				{
					echo ('<meta http-equiv="refresh"content=0;"PGIsertAdministratorLivros5642.php">');
				}
				else
				{
					echo '<center><h3 style="color: red;">';
					echo 'Usuário uo senha incorretos';
					echo '</h3></center>';
				}
			}
		?>
	</form>	

</body>
</html>