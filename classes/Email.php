<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email,$nombre,$token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        // crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'f8d8b1c7b4e60c';
        $mail->Password = '8f75bb088e6077';
        // Configuración del remitente y destinatario
        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu Cuenta';
        //SET HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';  // para evitar caracteres especiales en el mensaje
        // Contenido del mensaje en HTML
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->email . "</strong> Has creado tu cuenta en AppSalon, solo debes confirmarla
         presionando en el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token="
        . $this->token . "'>Confirmar Cuenta!</a></p>";
        $contenido .= "<p> si tu no creaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;
       // Enviar el mail
        $mail->send();
    }
    public function enviarInstrucciones(){
         // crear el objeto de email
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = 'sandbox.smtp.mailtrap.io';
         $mail->SMTPAuth = true;
         $mail->Port = 2525;
         $mail->Username = 'f8d8b1c7b4e60c';
         $mail->Password = '8f75bb088e6077';
         // Configuración del remitente y destinatario
         $mail->setFrom('cuentas@appsalon.com');
         $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
         $mail->Subject = 'Reestablece tu password';
         //SET HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';  // para evitar caracteres especiales en el mensaje
         // Contenido del mensaje en HTML
         $contenido = "<html>";
         $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu password,  sigue 
         el siguiente enlace para hacerlo.</p>";
         $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/recover?token="
         . $this->token . "'>Reestablece tu Password!</a></p>";
         $contenido .= "<p> si tu no creaste esta cuenta, puedes ignorar el mensaje</p>";
         $contenido .= "</html>";
 
         $mail->Body = $contenido;
        // Enviar el mail
         $mail->send();
    }
}