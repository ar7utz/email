<?php
    //print php info    
    

    // Importa as classes do PHPMailer como globais
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Pega os arquivos da biblioteca
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Criar uma instancia da classe PHPMailer
    $email = new PHPMailer;

    // Configurações do Servidor
    $email->isSMTP(); // Define que o e-mail vai ser do tipo SMTP
    $email->Host = "smtp.office365.com"; // Define o Host para envio de email
    $email->SMTPAuth = true; // Habilita a autenticacao com SMTP

    // Usuarios do e-mail
    $email->Username = 'jolongsbr@hotmail.com';
    $email->Password = 'Emailtesteviora';
    $email->SMTPSecure = 'tls';
    $email->Port = 587;

    //informações de quem vai enviar o email
    $email->setFrom('jolongsbr@hotmail.com','Enviador teste');
    $email->addReplyTo('jolongsbr@hotmail.com','nome do enviador');

    //informaçoes de quem vai receber   
    $email->addAddress('', 'artur');
    $email->addAddress('pereira.artur@hotmail.com', 'artur');


    //dados para corpo de email
    $email->isHTML('true');  //define que vamos enviar um html como email

    $email->Subject = 'Teste do server de envio de email'; //assunto

    //corpo do email
    $corpo = 'EMAIL TESTE! ';
    $email->Body = $corpo;

    //envia
    if ($email->send()){
        echo "email enviado com sucesso!";
    }else{
        echo "ERRO " . $email->ErrorInfo;
    }
