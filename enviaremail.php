<?php
//codigo para enviar o email ao usuario do chatbot utilizando a biblioteca phpmailer para acessar o metodo smtp 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['informacoesCompra'])) {
     // Recuperar os dados do array informacoesCompra enviado via requisição AJAX
     $userData = json_decode($_POST['informacoesCompra'], true);

     // Acessar os dados individualmente
     $cursos= $userData[0][1];
     $valortotal = $userData[1][1];
     $email = $userData[2][1];

     $cursosStr = implode(", ", $cursos);

     //exemplo utilizando o phpmailer
     //tem que instalar o phpmailer usando o composer, não consegui instalar o composer no serviço.

    // // Incluir a biblioteca PHPMailer
     require './lib/vendor/autoload.php';

    // // Criar uma nova instância do PHPMailer
     $mail = new PHPMailer(true);

    // // Configurar os detalhes do servidor de envio de email
     try {

    $mail -> isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jncjuliano@gmail.com';                     //SMTP username
    $mail->Password   = 'dvtqpeoknboifshd';  //aqui deveria ter a senha de app                              //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // // Configurar os detalhes do email
    $mail->setFrom('jncjuliano@gmail.com', 'Dominique Siqueira');
     $mail->addAddress($email);
     $mail->Subject = 'Confirmacao de Inscricao';
     $mail->Body = "Olá,\n\nSua compra foi confirmada nos cursos: $cursosStr. Sua compra ficou no valor de $valortotal.\n\nObrigado por participar!\n\nEquipe do Cursos IA";
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->send();
      echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    // // Enviar o email
     if ($mail->send()) {
    //     // Email enviado com sucesso
         echo 'Email enviado com sucesso.';
     } else {
    //     // Erro ao enviar o email
         echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
     }
}