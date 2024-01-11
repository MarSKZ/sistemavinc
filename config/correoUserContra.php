<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

     function enviarCorreo($correoDestinatario, $contrasena) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Servidor SMTP externo (por ejemplo, Gmail)
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = '';  // Tu dirección de correo
            $mail->Password = '';        // Tu contraseña

            $mail->setFrom('', ' LU-DA ');
            $mail->addAddress($correoDestinatario);
            $mail->addReplyTo('', 'Prueba Omitir'); // Ajusta tu nombre y correo electrónico
            $mail->Subject = 'Correo de prueba para la plataforma ';
            $mail->Body = 'Ignara este correo, Tu usuario es tu correo y Tu contraseña de acceso es :' . $contrasena;

            $mail->CharSet = 'UTF-8';  // Configurar la codificación

            $mail->send();
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
        }
    }

?>