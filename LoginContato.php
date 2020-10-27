<?php

	require_once("phpmailer/class.phpmailer.php");

      include "senhaEmail.php";  
      $para = $emaildaconta; 
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
          $error = 'Mensagem enviada!';
          return true;
        }
      }

      // Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
      //o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.
      $Vai    = "E-mail: $emaildaconta\n\nCodigo:";

       if (smtpmailer($emaildaconta, 'laurindoguimaraestec@gmail.com', 'Laurindo Guimarães', 'Solicitação de Documentos / Fale Conosco', $Vai)) {

        echo "<script> alert ('Mensagem enviada com sucesso!') </script>";
        echo ('<meta http-equiv="refresh"content=0;"secretariacontato.html">'); // Redireciona para uma página de obrigado.

      }
      if (!empty($error)) echo $error;
    }