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
    $email->Password = '15926344Ap!';
    $email->SMTPSecure = 'tls';
    $email->Port = 587;

    //informações de quem vai enviar o email
    $email->setFrom('jolongsbr@hotmail.com','Enviador teste');
    $email->addReplyTo('jolongsbr@hotmail.com','nome do enviador');

    //informaçoes de quem vai receber   
    $email->addAddress('flavio18hds@gmail.com', 'artur');

    //dados para corpo de email
    $email->isHTML('true');  //define que vamos enviar um html como email

    $email->Subject = 'Assunto do email'; //assunto

    //corpo do email
    $corpo = '<h1>sexo sexo sexo sexo sexo 2</h1>';
    $email->Body = $corpo;

    //envia
    if ($email->send()){
        echo "email enviado com sucesso!";
    }else{
        echo "fudeu fi " . $email->ErrorInfo;
    }
