<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');
    echo ('conectado');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>