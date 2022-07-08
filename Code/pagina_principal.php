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
    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Página principal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css\style2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main-container">
        <table>
                <tr>
                    <th>id</th>
                    <th>correo</th>
                    <th>usuario</th>
                    <th>contraseña</th>
                </tr>
                <?php
                $sql="SELECT * FROM usuarios ";
                $result=mysqli_query($conexion,$sql);
                while ($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr class="hijo">
                    <td><?php echo $mostrar['id'] ?></td>
                    <td><?php echo $mostrar['correo'] ?></td>
                    <td><?php echo $mostrar['usuario'] ?></td>
                    <td><?php echo $mostrar['contrasena'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <a href="php/cerrar_sesion.php">Cerrar sesion</a>
    </body>
</html>