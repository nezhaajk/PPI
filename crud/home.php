<?php
    session_start();

    if (!isset($_SESSION['usr'])){
        header("Location:rota.php");
    }
    echo $_SESSION['usr'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="rota.php?rota=logout">LOGOUT</a>
        <a href="rota.php?rota=cadastrar_usuario">Cadastrar Usuario</a>
    </nav>
    <h2>Lista de usuarios</h2>
    <main>
        <?php require "listarUsuarios.php"?>
</main>
</body>
</html>