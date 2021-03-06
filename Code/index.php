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
    <link href="css\style.css" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Login and register -  ESPE</title>
</head>
<body>
    <main>
        <div class="container__all">
            <div class="caja__atras">
                <div class="caja__atras-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar al aplicativo</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__atras-register">
                    <h3>¿Quieres crear una cuenta?</h3>
                    <p>Crea un usuario y contraseña</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
                </div>
                <!---------------Formulario----------------------------->
                <div class="container__login-register">
                    <!---------------Login----------------------------->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar sesion</h2>
                        <input type="text" placeholder="Correo electrónico" name= "correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>
                    <!---------------Register----------------------------->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Correo electronico"name="correo">
                        <input type="text" placeholder="Nombre de usuario"name="usuario">
                        <input type="password" placeholder="Contraseña"name="contrasena">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>