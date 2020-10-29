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
			<input type="password" name="txtsenha1" class="txtbox2"><br><br>
			Confirmar senha<br>
			<input type="password" name="txtsenha2" class="txtbox2"><br><br>	

			<input type="submit" value="Confirmar" name="btnconfirmar" class="butom">
		</center>

		<?php

		include('conexao.php');

		$botao=filter_input(INPUT_POST, 'btnconfirmar', FILTER_SANITIZE_STRING);

		$emaildaconta=filter_input(INPUT_POST, 'txtemail', FILTER_SANITIZE_STRING);
		$senhaum=filter_input(INPUT_POST, 'txtsenha1', FILTER_SANITIZE_STRING);
		$senhadois=filter_input(INPUT_POST, 'txtsenha2', FILTER_SANITIZE_STRING);

			if($botao == "Confirmar")
			{
				if($emaildaconta && $senhaum && $senhadois != null)
				{
					if($senhaum == $senhadois)
					{
						$query1="SELECT SENHA FROM login WHERE EMAIL LIKE '$emaildaconta'";
						$senhaantiga= mysqli_query($conn, $query1);
						
						$row_senhaantiga = mysqli_fetch_assoc($senhaantiga);
						$senhaantigamd5 = $row_senhaantiga['SENHA'] ;
						$senhaummd5 = md5($senhaum);

						if($senhaantigamd5!= $senhaummd5)
						{
							$query2 ="UPDATE `login` SET `SENHA` = md5('$senhaum') WHERE `login`.`EMAIL` LIKE '$emaildaconta';";

							
								if(mysqli_query($conn, $query2))
								{
									
									echo "<script>alert('Senha alterada com susesso!');</script>";
									echo ('<meta http-equiv="refresh"content=0;"PGcodLogAdministrator5241.php">');
								}
								else
								{
									echo '<h3 style="color: red;">';
									echo 'Problema na conexão';
									echo '</h3>';
								}

						}
						else
						{
							echo '<center><h3 style="color: red;">';
							echo 'A senha é igual a antiga';
							echo '</h3></center>';
						}

					}
					else
					{
						echo '<center><h3 style="color: red;">';
						echo 'As senhas estão diferentes';
						echo '</h3></center>';
					}
				}
				else
				{
					echo '<center><h3 style="color: red;">';
					echo 'Preencha todos os campos';
					echo '</h3></center>';
				}
			}
		?>
		
	</form>
</body>
</html>