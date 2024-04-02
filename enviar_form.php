<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "aalacdev@gmail.com";

    $asunto = "Mensaje de contacto desde portfolio web";
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Enviar correo
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redirigir a una página de confirmación
    header("Location: index.html");
}
?>
