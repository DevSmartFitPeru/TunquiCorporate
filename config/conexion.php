<?php
$contraseña = "31zDM#OJ9f1g7h!&hsDR";
$usuario = "sa";
$nombreBaseDeDatos = "ERP_ORACLE";
$rutaServidor = "tunquicorporate.ckioqeuxcht7.us-east-2.rds.amazonaws.com";
try {
    $db = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos;TrustServerCertificate=true", $usuario, $contraseña);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conectado!!';
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

?>
