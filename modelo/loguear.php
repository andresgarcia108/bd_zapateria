<?php
require 'conexion.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// consulta a la BD
$consulta = "SELECT nombre_usuario, correo_usuario, password_usuario, COUNT(*) AS contar FROM Usuario WHERE correo_usuario = '$usuario' AND password_usuario = '$clave' ";

// ejecutar la consulta
$ejecucion_consulta = mysqli_query($conexion, $consulta) or trigger_error("error en la consulta a la BD: ".mysqli_error($conexion));

// resultado de la consulta 
$resultado = mysqli_fetch_array($ejecucion_consulta);

if($resultado['contar'] > 0) {
    $_SESSION['username'] = $usuario;
    header("location: ../pagina_principal.php");
} else {
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error de Autenticación</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .error-message {
                padding: 20px;
                background-color: #ffdddd;
                border: 1px solid #f5c6cb;
                border-radius: 5px;
                color: #721c24;
                text-align: center;
                width: 300px;
            }
            .error-message h1 {
                font-size: 1.5em;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="error-message">
            <h1>Usuario o contraseña incorrecta</h1>
        </div>
    </body>
    </html>';
}
?>
