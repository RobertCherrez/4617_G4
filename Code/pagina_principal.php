<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Se ha cerrado sesión, inicie sesión para continuar");
                window.location="index.php"
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Página principal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h3>
            Aquí va la base de datos. Work in progress
        </h3>
        <a href="php/cerrar_sesion.php">Cerrar sesion</a>
    </body>
</html>