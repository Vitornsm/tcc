<?php
  session_start();

 
  if(empty($_SESSION['adm']))
  {
  	if(empty($_SESSION['codlogin']))
  	{
  		echo ('<meta http-equiv="refresh"content=0;"livros.php">');
  	}
  	else
  	{
  
    ?>
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
  <link rel="sortcut icon" href="img/etlg.ico" type="image/x-icon" /><br>
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

				if($MetodoSenha && $MetodoUsuari != null)
				{

					$query = "SELECT * FROM login WHERE USUARIO = '{$MetodoUsuari}' AND SENHA = md5('{$MetodoSenha}')";

					$result = mysqli_query($conn, $query);

					$row = mysqli_num_rows($result);
					
					if($row == 1)
					{
						$Usuarioemail=filter_input(INPUT_POST, 'txtusuario', FILTER_SANITIZE_STRING);

						$queryverificacao = "SELECT`EMAIL` FROM `login` WHERE USUARIO = '$Usuarioemail'";

						$executequery = mysqli_query($conn, $queryverificacao);

						$row_verificacao = mysqli_fetch_assoc($executequery);

						$varemail= $row_verificacao['EMAIL'];

						$n = 3; 
						$codigo = bin2hex(random_bytes($n));

						$codifinal = $codigo;

						$_SESSION['frase'] = $codifinal;

						//Metodo de filtrar conta

						$filtroUsuario = $MetodoUsuari ;
						
						$_SESSION['filtro'] = $filtroUsuario;


						$data_envio = date('d/m/Y');
					      $hora_envio = date('H:i:s'); 

					      require_once("phpmailer/class.phpmailer.php");

					      include "senhaEmail.php";  
					      $para = $varemail; 
					      $de = 'laurindoguimaraestec@gmail.com';
					      $de_nome = 'Laurindo Guimarães';
					      $corpo = "Redefinir Senha"; 

					      function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
					        global $error;
					        $mail = new PHPMailer();
					        $mail->CharSet = "UTF-8"; // UTF-8
					        $mail->IsSMTP();    // Ativar SMTP
					        $mail->SMTPDebug = 0;   // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
					        $mail->SMTPAuth = true;   // Autenticação ativada
					        $mail->SMTPSecure = 'ssl';  // Padrão de segurança
					        $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
					        $mail->Port = 465;      // A porta 587 deverá estar aberta em seu servidor
					        $mail->Username = USER;
					        $mail->Password = PWD;
					        $mail->SetFrom($de, $de_nome);
					        $mail->Subject = $assunto;
					        $mail->Body = $corpo;
					        $mail->AddAddress($para);
					        if(!$mail->Send()) {
					          $error = 'Mail error: '.$mail->ErrorInfo; 
					          return false;
					        } else {
					          $error = '';
					          return true;
					        }
					      }

					      // Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
					      //o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.
					      $Vai    = "E-mail: $varemail\n\nCódigo: $codigo";

					       if (smtpmailer($varemail, 'laurindoguimaraestec@gmail.com', 'Laurindo Guimarães', 'Código de Vereficão', $Vai)) 
					       {

					       	echo "<script> alert ('Código enviado para o e-mail') </script>";
					        echo ('<meta http-equiv="refresh"content=0;"PGcodLogAdmcodentra5241.php">'); // Redireciona para uma página de obrigado.

					      }
					      if (!empty($error)) echo'<center><h3 style="color: red;">';
											echo 'Falha na conexão com o servidor';
											echo '</h3></center>';
					}
					else
					{
						echo '<center><h3 style="color: red;">';
						echo 'Usuário uo senha incorretos';
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
		  }
		}
	  	else
	  	{
	  		echo ('<meta http-equiv="refresh"content=0;"livros.php">');
	  	}

		?>
	</form>	

</body>
</html>