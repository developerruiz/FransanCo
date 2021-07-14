<?php

$correoDestino = 'iruiz@frasancolors.com';
// esto es al correo al que se enviara el mensaje

$name = $_POST['nombre'];
$correo = $_POST['email'];
$tel = $_POST['telefono'];
$message = $_POST['mensaje'];
$categoria= $_POST['cosa'];
$vehiculo = $_POST['opt'];

$header = "enviado desde catalogo";
$mensajeCompleto = $message . "\nAtentamente: " . $name . "\nEmail: " . $correo . "\ntelefono: " . $tel . "\ncategoria: " . $categoria . "\nvehiculo: " . $vehiculo;

mail($correoDestino, $telefono, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente, Nos pondremos en contacto lo antes posible.')</script>";
echo "<script> setTimeout(\"location.href='catalogo.html'\",1000)</script>";
?>