
<?php


$botao= filter_input(INPUT_POST, 'btnpesquisar' , FILTER_SANITIZE_STRING);

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
  
  if($botao == "Pesquisar")
  {
    if($nome && $email != null)
    {
      
      $Categoria = "Definir nova senha";
      $mensagem = "URL que não defini";
      $data_envio = date('d/m/Y');
      $hora_envio = date('H:i:s'); 

      require_once("phpmailer/class.phpmailer.php");

      include "senhaEmail.php";  
      $para = $email; 
      $de = 'vitornsm@gmail.com';
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
          $error = 'Mensagem enviada!';
          return true;
        }
      }

      // Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
      //o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.
      $Vai    = "Nome: $nome\n\nE-mail: $email\n\nLink: $mensagem\n\n$corpo";

       if (smtpmailer($email, 'vitornsm@gmail.com', 'Laurindo Guimarães', 'Redefinir Senha', $Vai)) {

        echo "<script> alert ('Sucesso enviado, Mensagem enviada!') </script>";
        echo ('<meta http-equiv="refresh"content=0;"PGcodLogAdministrator5241.php">'); // Redireciona para uma página de obrigado.

      }
      if (!empty($error)) echo $error;
    }
    else
    {
      echo '<center><h1 style="color: red;font-family: Arial;">';
      echo 'Preencha todos os campos';
      echo '</h1></center>';
    }
  }
?>