<?php

use PHPMailer\PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};


require '../phpmiler/src/PHPMailer.php';
require '../phpmiler/src/SMTP.php';
require '../phpmiler/src/Exception.php';

$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'LOUCOSBR@gmail.com'; // Usuario SMTP
    $mail->Password = '123456'; // Contraseña SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('LOUCOSBR@gmail.com', 'LOCOUSBR'); // Remitente
    $mail->addAddress('dion@gmail.com', 'Dion'); // Destinatario
    $mail->addCC('onnix@gmail.com', 'Onnix'); // Copia

    $mail->isHTML(true);
    $mail->Subject = 'compra de producto';
    $cuerpo = '<h1 style="color: red;">compra de producto</h1>';
    $cuerpo .= '<p>ID de compra es : <b>'.$idTransanccion . '<b></p>';

    $mail->Body = utf8_decode($cuerpo);
    $mail->AltBody = 'Detalles de compra';

    $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php'); // Archivo de idioma ('../'')
    
    $mail->send();

    echo 'correo enviado';
} catch(Exception $e){
    echo 'error al enviar el correo: ', $mail->ErrorInfo;
}