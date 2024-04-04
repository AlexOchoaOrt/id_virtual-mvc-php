<?php 
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    public $email;
    public $nombre;
    public $token;
    public function __construct($nombre, $email, $token)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }
    public function EnviarConfirmacion(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];
        $mail->setFrom('cuenta@idvirtual.com');
        $mail->addAddress($this->email,'appIdVirtual.com');
        $mail->Subject = "Confirma tu cuenta";
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre. "</strong> Has creado tu cuenta IdVirtual,
        solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .="<p>Presiona aqui: <a href='". $_ENV['APP_URL'] ."/confirmar-cuenta?token=" . $this->token. "'>Confirmar Cuenta</p>";
        $contenido .= '<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>';
        $contenido .= '</html>';
        $mail->Body = $contenido;
        $mail->send();

    }
    public function enviarInstrucciones(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];
        $mail->setFrom('cuenta@idvirtual.com');
        $mail->addAddress($this->email,'appIdVirtual.com');
        $mail->Subject = "Confirma tu cuenta";
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre. "</strong>Has solicitado restablecer tu pasword,
        sigue el siguinete enlace para hacerlo.</p>";
        $contenido .="<p>Presiona aqui: <a href='". $_ENV['APP_URL'] ."/recuperar?token=" . $this->token. "'>Restablecer password</p>";
        $contenido .= '<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>';
        $contenido .= '</html>';
        $mail->Body = $contenido;
        $mail->send();

    }

}