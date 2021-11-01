<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$numero = $_POST["numero"];
$comentario = $_POST["comentario"];

$body = "Nombre: " . $nombre ."<br>Correo: " . $correo ."<br>Numero: " .$numero . "<br>Comentario: " .$comentario;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'a2plcpnl0753.prod.iad2.secureserver.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
    $mail->Username   = 'ptoribio@multiserviciossky.com';                     // SMTP username
    $mail->Password   = 'ptoribio2020SKY';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                       // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ptoribio@multiserviciossky.com', $nombre);
    $mail->addAddress('ptoribio@multiserviciossky.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'HOLA, MULTISERVICIOS SKY';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';

    $mail->send();
    header("Location: contactanos.php");
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>    