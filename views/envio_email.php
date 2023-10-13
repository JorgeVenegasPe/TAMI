<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $mensaje = $_POST['mensaje'];
    $asunto = "Consulta de productos";

    // Crear una instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'angel29629760@gmail.com'; // Reemplaza con tu dirección de Gmail
        $mail->Password = 'qdbk hvxd mjir jwwu'; // Reemplaza con tu contraseña de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Destinatario
        $mail->setFrom($email, 'Tu Nombre');
        $mail->addAddress('danielcarahuatay@gmail.com', 'Tu Nombre');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = "Nombre: $nombre <br> Email: $email <br> Teléfono: $telefono <br> Producto: $producto <br> cantidad: $cantidad <br> Mensaje: $mensaje ";

        if (!empty($_FILES['archivo']['tmp_name'])) {
            $archivo_nombre = $_FILES['archivo']['name'];
            $archivo_temp = $_FILES['archivo']['tmp_name'];
            $mail->addAttachment($archivo_temp, $archivo_nombre);
        }

        // Enviar el correo
        $mail->send();
        // JavaScript para mostrar una alerta y redirigir a formulario.php
        echo '<script>alert("Mensaje enviado con éxito"); window.location = "formulario.php";</script>';
    } catch (Exception $e) {
        echo '<script>alert("El mensaje no pudo ser enviado. Error del correo: ' . $mail->ErrorInfo . '"); window.location = "formulario.php";</script>';
    }
} else {
    echo "Acceso denegado. No se recibieron datos del formulario.";
}
