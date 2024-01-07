<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Realizar acciones con los datos (ejemplo: mostrar en pantalla)
    echo "Nombre: $nombre <br>";
    echo "Correo Electrónico: $email <br>";
    echo "Mensaje: $mensaje <br>";

    

    // Puedes realizar acciones adicionales aquí, como enviar correos electrónicos o almacenar en una base de datos.
}
?>