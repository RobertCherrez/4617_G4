<?php
    session_start();
    include 'php/conexion_be.php';
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
    $sql="SELECT * FROM usuarios";
    $query=mysqli_query($conexion,$sql);
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                    <h1>Ingrese un nuevo registro</h1>
                    <form action="php/insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="correo" placeholder="correo">
                        <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario">
                        <input type="password" class="form-control mb-3" name="contrasena" placeholder="contraseña">

                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>

                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Correo</th>
                                <th>Usuario</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['id']?> </th>
                                    <th><?php echo $row['correo']?> </th>
                                    <th><?php echo $row['usuario']?> </th>
                                    <th><a href="php/actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="php/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>