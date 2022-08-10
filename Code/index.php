<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("Location: pagina_principal.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css\estilo.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="todo">
    <div class="container fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <form action="php/login_usuario.php" method="POST">
                        <h3>Iniciar sesion</h3>
                        <div class="row d-flex justify-content-center">
                            <label for="correo">Correo:</label>
                            <input type="text" placeholder="a@gmail.com" name= "correo">
                        </div>
                        <div class="row d-flex justify-content-center">
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" placeholder="Contraseña" name= "contrasena">
                        </div>
                        <button type="submit" class="unomas btn btn-success">Entrar
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>