<?php
$destino= "comercial@torreoningles.com";
$nombre = $_POST["nombre"];
$empresa = $_POST["empresa"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nempresa: " . $empresa . "\ntelefono: " . $telefono . "\nemail: " . $email . "\nmensaje: " . $mensaje;
mail($destino,"contacto", $contenido);
header("Location:gracias.html")
?>

