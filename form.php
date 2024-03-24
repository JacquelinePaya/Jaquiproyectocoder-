<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $motivo = $_POST['motivodecontacto'];
    $mensaje = $_POST['mensaje'];
    
    // Aquí puedes hacer lo que necesites con los datos, como enviar un correo electrónico, guardarlos en una base de datos, etc.
    
    // Por ejemplo, aquí simplemente los mostramos en pantalla
    echo "Nombre: " . $nombre . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Teléfono: " . $telefono . "<br>";
    echo "Motivo de contacto: " . $motivo . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
} else {
    // Si no se ha enviado el formulario, redirecciona a alguna página
    header("Location: index.html");
    exit;
}
?>