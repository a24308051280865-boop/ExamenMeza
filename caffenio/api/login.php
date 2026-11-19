<?php
session_start();            // para guardar quién inició sesión
include "conexion.php";

// Si entran directo a este archivo (sin formulario), los mando al login
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../views/login.html");
    exit;
}

$correo   = trim($_POST["correo"] ?? "");
$password = $_POST["password"] ?? "";

// Buscar al usuario por su correo
$stmt = mysqli_prepare($conexion, "SELECT id, nombre, password FROM usuarios WHERE correo = ?");
mysqli_stmt_bind_param($stmt, "s", $correo);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $id, $nombre, $hash);

// Si existe y la contraseña coincide, guardo sus datos y lo mando a la tienda
if (mysqli_stmt_fetch($stmt) && password_verify($password, $hash)) {
    $_SESSION["id"]     = $id;
    $_SESSION["nombre"] = $nombre;
    $_SESSION["correo"] = $correo;

    header("Location: index.php");
    exit;
}

// Si llega aquí es porque algo estuvo mal y se muestra el error
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Caffenio - Error</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <div class="caja">
        <h1>CAFFENIO</h1>
        <p class="error">Correo o contraseña incorrectos.</p>
        <p><a href="../views/login.html">Volver a intentar</a></p>
        <p><a href="../views/register.html">Crear una cuenta</a></p>
    </div>
</body>
</html>